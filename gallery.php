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
    <title>Gallery</title>

    <!-- og/metadata -->

    <meta name="description" content="" />
    <meta name="author" content="Simon Bénet" />
    <meta name="google-site-verification" content="" />
    <meta property="og:title" content="Portfolio standard template" />
    <meta property="og:site_name" content="Portfolio standard template" />
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

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/persistantColorMode.js" defer></script>
    <script src="assets/js/languageDropDownMenu.js" defer></script>
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
                
                <!-- language switch -->

                <div id="langSwitchContainer">
                    <div id="languageIconContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/5403/5403606.png" alt="<?= $translations["languageIconAlt"]; ?>" id="languageIcon" title="<?= $translations["languageChoiceTitle"]; ?>">
                    </div>
                    <div id="dropDownContainer">
                        <?php if (isset($_GET["lang"]) && $_GET["lang"] !== "en"): ?>
                            <a href="?lang=en#gallery.php" title="<?= $translations["switchToEnglishTitle"]; ?>">
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
                        <a href="index.php?lang=<?= $lang ?>#homeSection" title="<?= $translations["homeQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["home"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.php?lang=<?= $lang ?>#aboutSection" title="<?= $translations["aboutQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["about"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.php?lang=<?= $lang ?>#projectsSection" title="<?= $translations["projectsQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["projects"]; ?></p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.php?lang=<?= $lang ?>#contactSection" title="<?= $translations["contactQuickAcessTitle"]; ?>"><p class="navbarTxt"><?= $translations["contact"]; ?></p></a>
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
                    <a href="index.php?lang=<?= $lang ?>#homeSection" title="<?= $translations["homeQuickAcessTitle"]; ?>"><?= $translations["home"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="index.php?lang=<?= $lang ?>#aboutSection" title="<?= $translations["aboutQuickAcessTitle"]; ?>"><?= $translations["about"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="index.php?lang=<?= $lang ?>#projectsSection" title="<?= $translations["projectsQuickAcessTitle"]; ?>"><?= $translations["projects"]; ?></a>
                </li>
                <li class="quickAccess">
                    <a href="index.php?lang=<?= $lang ?>#contactSection" title="<?= $translations["contactQuickAcessTitle"]; ?>"><?= $translations["contact"]; ?></a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <section id="gallery">
            <h1><?= $translations["galleryH1"]; ?></h1>
            <div id="galleryMainContainer">
    
                <!-- project 1 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject1H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img1.png" alt="<?= $translations["galleryProject1ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject1Description"]; ?></p>
                            <!-- <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p> -->
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
    
                <!-- project 2 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject2H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img2.png" alt="<?= $translations["galleryProject2ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject2Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- project 3 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject3H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img3.png" alt="<?= $translations["galleryProject3ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject3Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
    
                <!-- project 4 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject4H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img4.png" alt="<?= $translations["galleryProject4ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject4Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
    
                <!-- project 5 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject5H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img1.png" alt="<?= $translations["galleryProject1ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject5Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
    
                <!-- project 6 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject6H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img2.png" alt="<?= $translations["galleryProject2ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject6Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
                
                <!-- project 7 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject7H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img3.png" alt="<?= $translations["galleryProject3ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject7Description"]; ?></p>
                            <a href="" title="<?= $translations["galleryProjectCtaTitle"]; ?>" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
    
                <!-- project 8 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles"><?= $translations["galleryProject8H2"]; ?></h2>
                    <div class="projectsGalleryContainers">
                        <img src="assets/img/img4.png" alt="<?= $translations["galleryProject4ImgAlt"]; ?>" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions"><?= $translations["galleryProject8Description"]; ?></p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta"><?= $translations["galleryProjectCta"]; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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