<?php
    session_start();

    require("assets/inc/mailer.php");

    // ---- Obtenir de vrai code sur le site de google reCAPTCHA => suivre les instructions de chatGPT ---- //

    // $recaptcha_secret = 'your-secret-key';
    // $recaptcha_response = $_POST['g-recaptcha-response'];

    // reCAPTCHA verification
    // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
    // $response_keys = json_decode($response, true);

    // if (intval($response_keys["success"]) !== 1) {
    //     die("reCAPTCHA verification failed. Please try again.");
    // }

    if (empty($_SESSION["csrf_token"])) {
        $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
    }

    $validationMessage = "";
    $errorMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST) && !empty($_POST)) {
        $name = isset($_POST["name"]) ? htmlspecialchars(strip_tags(trim($_POST["name"]))) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars(strip_tags(trim($_POST["email"]))) : "";
        $message = isset($_POST["message"]) ? htmlspecialchars(strip_tags(trim($_POST["message"]))) : "";

        if ($_POST["csrf_token"] !== $_SESSION["csrf_token"]) {
            die("Invalid CSRF token.");
        }

        if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errorMessage = "Invalid name.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = "Invalid email.";
        }

        if (empty($message) || strlen($message) > 255) {
            $errorMessage = "Invalid message.";
        }

        if (empty($errorMessage)) {
            $_SESSION["verifiedName"] = $name;
            $_SESSION["verifiedEmail"] = $email;
            $_SESSION["verifiedMessage"] = $message;
            $_SESSION["validationMessage"] = "";
            $_SESSION["errorMessage"] = "";
        } else {
            $_SESSION["errorMessage"] = $errorMessage;
        }
    }

    if (isset($_POST["submit"])) {
        if (empty($_SESSION["verifiedName"]) || empty($_SESSION["verifiedEmail"]) || empty($_SESSION["verifiedMessage"])) {
            $errorMessage = "An error occurred while sending the message. Please complete the form correctly and try again.";
        } else {
            $validationMessage = "Thank you for your message. We will respond as soon as possible.";
            $response = sendMail($_SESSION["verifiedName"], $_SESSION["verifiedEmail"], $_SESSION["verifiedMessage"]);

            session_unset();
            session_destroy();

            header("Location: " . strtok($_SERVER["REQUEST_URI"], "?"));
            exit;
        }
    }

    if (isset($_SESSION["validationMessage"])) {
        $validationMessage = $_SESSION["validationMessage"];
        unset($_SESSION["validationMessage"]);
    }

    if (isset($_SESSION["errorMessage"])) {
        $errorMessage = $_SESSION["errorMessage"];
        unset($_SESSION["errorMessage"]);
    }
?>

<?php
    $lang = isset($_GET["lang"]) ? $_GET["lang"] : "en"; 


    $lang = in_array($lang, ["en", "fr", "es", "de"]) ? $lang : "en";

    $translation_file = __DIR__ . "/assets/translations/" . $lang . ".php";


    if (file_exists($translation_file)) {
        $translations = require $translation_file;
    } else {
        $translations = [];
    }

    if (!isset($_GET["lang"])) {
        header("Location: ?lang=$lang");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="<?= $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium portfolio template <?= $lang; ?></title>

    <!-- og/metadata -->

    <meta name="description" content="" />
    <meta name="author" content="Simon Bénet" />
    <meta name="google-site-verification" content="" />
    <meta property="og:title" content="Portfolio premium template" />
    <meta property="og:site_name" content="Portfolio premium template" />
    <meta property="og:url" content="https://www.simonbenet.com/" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="capture d'ecran du portfolio" />

    <!-- google font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni&family=Roboto+Flex&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style sheet -->
    
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- link Leaflet -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- scipt Leaflet -->

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/map.js" defer></script>
    <script src="assets/js/persistantColorMode.js" defer></script>
    <script src="assets/js/formValidation.js" defer></script>
    <script src="assets/js/languageDropDownMenu.js" defer></script>

    <!-- reCAPTCHA Script -->

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <header>
        <img src="assets/img/logo.jpg" alt="logo" id="headerLogo">
        <div id="headerMainContentContainer">
            <div id="logoContainer">

                <!-- logo -->

                <img id="pp" src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="<?= $translations["portraitAlt"]; ?>">
                <div id="brandName"><?= $translations["brandName"]; ?></div>

                <!-- color mode -->

                <div id="colorModeContainer">
                    <div id="darkModeBtn" class="colorModeBtns darkMode active" title="<?= $translations["darkModTitle"]; ?>"><img class="colorModeBtnImg active" src="https://cdn-icons-png.flaticon.com/128/4129/4129208.png" alt="<?= $translations["moonIconAlt"]; ?>"></div> 
                    <div id="lightModeBtn" class="colorModeBtns lightMode noActive" title="<?= $translations["lightModTitle"]; ?>"><img class="colorModeBtnImg noActive" src="https://cdn-icons-png.flaticon.com/128/54/54455.png" alt="<?= $translations["sunIconAlt"]; ?>"></div>
                </div>

                <!-- Language switch -->

                <div id="langSwitchContainer">
                    <div id="languageIconContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/5403/5403606.png" alt="<?= $translations["languageIconAlt"]; ?>" id="languageIcon" title="<?= $translations["languageChoiceTitle"]; ?>">
                    </div>
                    <div id="dropDownContainer">
                        <?php if (isset($_GET["lang"]) && $_GET["lang"] !== "en"): ?>
                            <a href="?lang=en#index.php" title="<?= $translations["switchToEnglishTitle"]; ?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="<?= $translations["enFlagIconAlt"]; ?>" id="frFlag">
                                <span>EN</span>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($_GET["lang"]) && $_GET["lang"] !== "fr"): ?>
                            <a href="?lang=fr" title="<?= $translations["switchToFrenchTitle"]; ?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/4060/4060248.png" alt="<?= $translations["frFlagIconAlt"]; ?>" id="frFlag">
                                <span>FR</span>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($_GET["lang"]) && $_GET["lang"] !== "es"): ?>
                            <a href="?lang=es" title="<?= $translations["switchToSpanishTitle"]; ?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/4060/4060260.png" alt="<?= $translations["esFlagIconAlt"]; ?>" id="esFlag">
                                <span>ES</span>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($_GET["lang"]) && $_GET["lang"] !== "de"): ?>
                            <a href="?lang=de" title="<?= $translations["switchToGermanTitle"]; ?>">
                                <img src="https://cdn-icons-png.flaticon.com/128/555/555613.png" alt="<?= $translations["deFlagIconAlt"]; ?>" id="deFlag">
                                <span>DE</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Navbar -->

            <div id="navbar">
                <ul>
                    <li class="quickAccess">
                        <a href="#homeSection" title="<?= $translations["homeQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["home"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#aboutSection" title="<?= $translations["aboutQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["about"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#projectsSection" title="<?= $translations["projectsQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["projects"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#contactSection" title="<?= $translations["contactQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["contact"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#gallery.php?lang=<?= $lang ?>" title="<?= $translations["galleryQuickAcessTitle"]; ?>"><p class="navbarTxt" onclick="event.preventDefault(); window.location.href='gallery.php?lang=<?= $lang ?>'"><?= $translations["gallery"]; ?></p></a>
                    </li>
                </ul>
            </div>

            <!-- Burger Menu -->

            <div id="burgerMenuMainContainer">
                <div id="burgerMenuOpenerContainer" class="burgerMenuImgContainer">
                    <img src="https://www.svgrepo.com/show/506800/burger-menu.svg" alt="<?= $translations["bmIconAlt"]; ?>">
                </div>
                <div id="burgerMenuCloserContainer" class="burgerMenuImgContainer">
                    <img src="https://cdn-icons-png.flaticon.com/128/6423/6423881.png" alt="<?= $translations["bmCloserIconAlt"]; ?>">
                </div>
            </div>
        </div>
        <div id="burgerMenu">
            <ul>
                <li class="quickAccess">
                    <a href="#homeSection" title="<?= $translations["homeQuickAcessTitle"]; ?>"><?= $translations["home"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="#aboutSection" title="<?= $translations["aboutQuickAcessTitle"]; ?>"><?= $translations["about"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="#projectsSection" title="<?= $translations["projectsQuickAcessTitle"]; ?>"><?= $translations["projects"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="#contactSection" title="<?= $translations["contactQuickAcessTitle"]; ?>"><?= $translations["contact"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="gallery.php?lang=<?= $lang ?>" title="<?= $translations["galleryQuickAcessTitle"]; ?>" onclick="event.preventDefault(); window.location.href='gallery.php?lang=<?= $lang ?>'"><?= $translations["gallery"]; ?></a>
                </li>
            </ul>
        </div>
    </header>
    <main>

        <!-- Home Section -->
        
        <section id="homeSection">
            <div id="homeContentMainContainer" class="defaultMainContainer">
                <div id="homeMainContentContainer">
                    <img id="homeImg" src="https://cdn.pixabay.com/photo/2023/07/19/19/14/ai-generated-8137635_960_720.png" alt="logo">
                    <div id="titleContainer" class="homeContentContainers">
                        <h1><?= $translations["homeH1"]; ?>
                            <img src="https://cdn.pixabay.com/photo/2023/07/19/19/14/ai-generated-8137635_960_720.png" alt="logo" id="titleImg">
                        </h1>
                    </div>
                    <div id="homeSpeechAndCtaContainer">
                        <div id="speechContainer">
                            <h2><?= $translations["speechH2"]; ?></h2>
                            <p><?= $translations["speech"]; ?></p>
                        </div>
                        
                        <!-- "Projects" CTA -->
                        <div id="homeCtaMainContainer">
                            <a id="homeCta" href="#projectsSection" title="<?= $translations["projectsQuickAcessTitle"]; ?>">
                                <p><?= $translations["homeCta"]; ?></p> 
                                <img id="homeCtaImg" src="https://cdn-icons-png.flaticon.com/128/4705/4705847.png" alt="<?= $translations["homeCtaImgAlt"]; ?>">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- home right sidenav -->

                <div id="rightSidenavContainer">
                    <ul>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="<?= $translations["linkedinTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="<?= $translations["linkedinAlt"]; ?>"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="<?= $translations["facebookTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="<?= $translations["facebookAlt"]; ?>"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="<?= $translations["instagramTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="<?= $translations["instagramAlt"]; ?>"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="<?= $translations["xTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/14417/14417460.png" alt="<?= $translations["xAlt"]; ?>"></a>
                        </li>
                    </ul>
                </div>

                <!-- Mouse animation -->

                <div id="mouse" title="<?= $translations["scrollTitle"]; ?>">
                    <div id="scrollContainer"></div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        
        <section id="aboutSection">
            <div class="defaultMainContainer">
                <div class="sectionTopContainers">
                    <h2 class="sectionTitle"><?= $translations["aboutMeH2"]; ?></h2>
                    <!-- <p>Lorem ipsum dolor <strong>sit amet</strong> consectetur adipisicing elit. Aspernatur praesentium assumenda quidem <strong>ullam</strong> quibusdam perferendis reprehenderit accusantium, error numquam id impedit <strong>aut sit beatae</strong> odit qui labore ad minima? Qui.</p> -->
                    <p><?= $translations["aboutMeSpeech"]; ?></p>
                </div>
                <div id="aboutSectionMainContainer">

                    <!-- bio -->

                    <div id="bioContainer" class="aboutSectionContainers">
                        <h3 class="aboutSectionTitles"><?= $translations["moreAboutMeH3"]; ?></h3>
                        <p><?= $translations["moreAboutMeSpeech1"]; ?></p>
                        <p class="bioP"><?= $translations["moreAboutMeSpeech2"]; ?></p>
                        <p class="bioP"><?= $translations["moreAboutMeSpeech3"]; ?></p>
                        <!-- <p>Lorem ipsum dolor, sit amet <strong>consectetur</strong> adipisicing elit. Perferendis facilis enim fuga! <strong>Similique</strong> reprehenderit labore sed asperiores quod, voluptatibus fuga.</p>
                        <p class="bioP">Lorem ipsum dolor, sit amet consectetur <strong>adipisicing elit</strong>. Perferendis facilis enim fuga! Similique reprehenderit labore sed asperiores quod, <strong>voluptatibus</strong> fuga.</p>
                        <p class="bioP">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis facilis enim fuga! Similique <strong>reprehenderit labore</strong> sed asperiores quod, voluptatibus fuga.</p> -->

                        <!-- "Contact me" CTA -->

                        <div class="ctaContainers">
                            <a href="#contactSection" class="cta" title="<?= $translations["contactCta"]; ?>"><?= $translations["contactCtaTitle"]; ?></a>
                        </div>
                    </div>

                    <!-- skills -->

                    <div id="skillsMainContainer" class="aboutSectionContainers">
                        <h3 class="aboutSectionTitles"><?= $translations["skillsH3"]; ?></h3>
                        <div id="skillsContainer">
                            <div class="skills"><?= $translations["skills1"]; ?></div>
                            <div class="skills"><?= $translations["skills2"]; ?></div>
                            <div class="skills"><?= $translations["skills3"]; ?></div>
                            <div class="skills"><?= $translations["skills4"]; ?></div>
                            <div class="skills"><?= $translations["skills5"]; ?></div>
                            <div class="skills"><?= $translations["skills6"]; ?></div>
                            <div class="skills"><?= $translations["skills7"]; ?></div>
                            <div class="skills block"><?= $translations["skills8"]; ?></div>
                            <div class="skills block"><?= $translations["skills9"]; ?></div>
                            <div class="skills block"><?= $translations["skills10"]; ?></div>
                            <div class="skills block"><?= $translations["skills11"]; ?></div>
                            <div class="skills block"><?= $translations["skills12"]; ?></div>
                            <div class="skills block"><?= $translations["skills13"]; ?></div>
                            <div class="skills block"><?= $translations["skills14"]; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->

        <section id="projectsSection">
            <div class="sectionTopContainers">
                <h2 class="sectionTitle"><?= $translations["projectH2"]; ?></h2>
                <p class="projectP"><?= $translations["projectSpeech"]; ?></p>
            </div>
            <div id="projectsSectionMainContainer">

                <!-- project 1 -->

                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="assets/img/img1.png" alt="<?= $translations["projectImg1Alt"]; ?>">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles"><?= $translations["project1H4"]; ?></h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription"><?= $translations["project1Description"]; ?></p>
                        <!-- <p class="projectsDescription">
                            Lorem ipsum, dolor sit <strong>amet consectetur</strong> adipisicing elit. <strong>Maiores</strong>, ullam?
                        </p> -->
                    </div>
                </div>
                
                <!-- project 2 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="assets/img/img2.png" alt="<?= $translations["projectImg2Alt"]; ?>">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles"><?= $translations["project2H4"]; ?></h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription"><?= $translations["project2Description"]; ?></p>
                    </div>
                </div>

                <!-- project 3 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="assets/img/img3.png" alt="<?= $translations["projectImg3Alt"]; ?>">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles"><?= $translations["project3H4"]; ?></h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription"><?= $translations["project3Description"]; ?></p>
                    </div>
                </div>

                <!-- project 4 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="assets/img/img4.png" alt="<?= $translations["projectImg4Alt"]; ?>">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles"><?= $translations["project4H4"]; ?></h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription"><?= $translations["project4Description"]; ?></p>
                    </div>
                </div>
            </div>

            <!-- "Projects gallery" CTA -->

            <div class="ctaContainers">
                <a href="gallery.php" class="cta" rel="noreferrer" title="<?= $translations["projectCtaTitle"]; ?>"><?= $translations["galleryCta"]; ?></a>
            </div>
        </section>

        <!-- Contact Section -->

        <section id="contactSection">
            <div class="defaultMainContainer">
                <div class="sectionTopContainers">
                    <h2 class="sectionTitle"><?= $translations["contactH2"]; ?></h2>
                    <p><?= $translations["contactSpeech"]; ?></p>
                </div>
            </div>

            <!-- Contact form -->

            <div class="formMainContainer" id="contactFormContainer">
                <div class="card">
                    <div class="cardLogoContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/1182/1182791.png" alt="<?= $translations["formImgAlt"]; ?>" class="formLogo">
                    </div>
                    <div class="cardHeader">
                        <h3 class="formTitle"><?= $translations["contactH3"]; ?></h3>
                        <p class="formTxt"><?= $translations["formSpeech"]; ?></p>
                    </div>
                    <form action="" method="POST" class="forms" id="contactForm">
                        <div class="formItem">
                            <label for="nameInput"><?= $translations["nameLabel"]; ?></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">person</span>
                                <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="<?= $translations["nameInputPlaceholder"]; ?>" onblur="validateName(this)" required>
                                <div class="nameValidation" aria-live="polite"></div>
                            </div>
                            <div class="nameError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="emailInput"><?= $translations["emailLabel"]; ?></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">mail</span>
                                <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="<?= $translations["emailInputPlaceholder"]; ?>" onblur="validateEmail(this)" required>
                                <div class="emailValidation" aria-live="polite"></div>
                            </div>
                            <div class="emailError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="messageInput"><?= $translations["messageLabel"]; ?></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">comment</span>
                                <textarea name="message" id="messageInput" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="<?= $translations["messageInputPlaceholder"]; ?>" onblur="validateMessage(this)" required></textarea>
                                <div class="messageValidation" aria-live="polite"></div>
                            </div>
                            <div class="messageError" aria-live="polite"></div>
                        </div>

                        <!-- reCAPTCHA -->

                        <div id="reCaptcha" class="g-recaptcha" data-sitekey="votre-site-key"></div>

                        <button class="formBtn" name="submit" type="submit" title="<?= $translations["submitBtnTitle"]; ?>"><?= $translations["submitBtn"]; ?></button>
                        <div class="errorMessagesContainers">
                            <div id="contactErrorMessage"></div>
                        </div>
                        <div id="formSubmitValidationMessage">
                            <?php
                            if (!empty($validationMessage)) {
                                echo $validationMessage;
                            }
                            ?>
                        </div>
                        <div id="formSubmitErrorMessage">
                            <?php
                            if (!empty($errorMessage)) {
                                echo $errorMessage;
                            }
                            ?>
                        </div>

                        <!-- CSRF_TOKEN -->

                        <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                    </form>
                </div>
            </div>
        </section>

        <!-- Map -->

        <div class="mapContainer">
            <div id="map"></div>
        </div>
    </main>
    
    <footer>
        <div id="footerMainContainer">
            <div id="footerBioContainer">
                <p id="footerName"><?= $translations["footerName"]; ?></p>
                <p id="footerBio"><?= $translations["footerBio"]; ?></p>
            </div>
            <div id="footerSocialContainer">
                <h2><?= $translations["footerH2"]; ?></h2>
                <ul>
                    <li>
                        <a href="#" target="_blank" title="<?= $translations["linkedinTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="<?= $translations["linkedinAlt"]; ?>"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="<?= $translations["facebookTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="<?= $translations["facebookAlt"]; ?>"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="<?= $translations["instagramTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="<?= $translations["instagramAlt"]; ?>"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="<?= $translations["xTitle"]; ?>" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/14417/14417460.png" alt="<?= $translations["xAlt"]; ?>"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="propertyContainer">
            <p><?= $translations["madeBy"]; ?><a href="https://www.simonbenet.com/enVersion.html" target="_blank" title="">Simon Bénet</a> <?= $translations["year"]; ?></p>
        </div>
    </footer>
</body>
</html>