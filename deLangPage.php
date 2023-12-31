<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium portfolio template</title>

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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <!-- scipt Leaflet -->

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/map.js" defer></script>
    <script src="assets/js/persistantColorMode.js" defer></script>
    <script src="assets/js/formValidation.js" defer></script>
    <script src="assets/js/chatbotOpener.js" defer></script>
    <script src="assets/js/chatbotScript.js" defer></script>
    <script src="assets/js/languageDropDownMenu.js" defer></script>
</head>
<body>
    <header>
        <div id="headerMainContentContainer">
            <div id="logo-colorMode-langSwitchContainer">

                <!-- logo -->

                <img id="logo" src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Portrait/logo">
                <p>your name</p>

                <!-- color mode -->

                <div id="colorModeContainer">
                    <div id="darkModeBtn" class="colorModeBtns darkMode active" title="Dark mod"><img class="colorModeBtnImg active" src="https://cdn-icons-png.flaticon.com/128/4129/4129208.png" alt="Moon icon"></div> 
                    <div id="lightModeBtn" class="colorModeBtns lightMode noActive" title="Light mod"><img class="colorModeBtnImg noActive" src="https://cdn-icons-png.flaticon.com/128/54/54455.png" alt="Sun icon"></div>
                </div>

                <!-- lang switch -->

                <div id="langSwitchContainer">
                    <div id="languageIconContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/5403/5403606.png" alt="Language icon" id="languageIcon" title="Language choice">
                        <img id="dropDownIcon" src="https://cdn-icons-png.flaticon.com/128/32/32195.png" alt="Drop down icon" title="Click to show the language drop down menu">
                    </div>
                    <div id="dropDownContainer">
                        <a href="/index.html" title="Click to switch the page language to english">
                            <img src="https://cdn-icons-png.flaticon.com/128/555/555417.png" alt="Fr flag icon" id="frFlag">
                            <span>EN</span>
                        </a>
                        <a href="/frLangPage.html" title="Click to switch the page language to french">
                            <img src="https://cdn-icons-png.flaticon.com/128/4060/4060248.png" alt="Fr flag icon" id="frFlag">
                            <span>FR</span>
                        </a>
                        <a href="/esLangPage.html" title="Click to switch the page language to spanish">
                            <img src="https://cdn-icons-png.flaticon.com/128/4060/4060260.png" alt="Es flag icon" id="esFlag">
                            <span>ES</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="navbar">
                <ul>
                    <li class="quickAccess">
                        <a href="#homeSection" title="Home section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/73/73417.png" alt=""><p class="navbarTxt">home</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#aboutSection" title="About section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/3817/3817173.png" alt=""><p class="navbarTxt">about</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#projectsSection" title="Projects section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/6002/6002182.png" alt=""><p class="navbarTxt">projects</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="#contactSection" title="Contact section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/1250/1250663.png" alt=""><p class="navbarTxt">contact</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="gallery.html" title="Gallery quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/8198/8198405.png" alt=""><p class="navbarTxt">gallery</p></a>
                    </li>
                </ul>
            </div>
            <div id="burgerMenuMainContainer">
                <div id="burgerMenuOpenerContainer" class="burgerMenuImgContainer">
                    <img src="https://www.svgrepo.com/show/506800/burger-menu.svg" alt="Burger menu icone">
                </div>
                <div id="burgerMenuCloserContainer" class="burgerMenuImgContainer">
                    <img src="https://cdn-icons-png.flaticon.com/128/6423/6423881.png" alt="Burger menu close icone">
                </div>
            </div>
        </div>
        <div id="burgerMenu">
            <ul>
                <li class="quickAccess">
                    <a href="#homeSection" title="Home section quick access">home</a>
                </li>
                <li class="quickAccess">
                    <a href="#aboutSection" title="About section quick access">about</a>
                </li>
                <li class="quickAccess">
                    <a href="#projectsSection" title="Projects section quick access">projects</a>
                </li>
                <li class="quickAccess">
                    <a href="#contactSection" title="Contact section quick access">contact</a>
                </li>
                <li class="quickAccess">
                    <a href="gallery.html" title="Contact section quick access">gallery</a>
                </li>
            </ul>
        </div>
    </header>
    <main>

        <!-- Home Section -->
        
        <section id="homeSection">
            <div id="homeContentMainContainer" class="defaultMainContainer">
                <div id="homeMainContentContainer">
                    <img id="homeImg" src="https://cdn.pixabay.com/photo/2023/07/19/19/14/ai-generated-8137635_960_720.png" alt="">
                    <div id="titleContainer" class="homeContentContainers">
                        <h1>Lorem ipsum dolor sit amet
                            <img src="https://cdn.pixabay.com/photo/2023/07/19/19/14/ai-generated-8137635_960_720.png" alt="" id="titleImg">
                        </h1>
                    </div>
                    <div id="homeSpeechAndCtaContainer">
                        <div id="speechContainer">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing ?</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ipsa facilis obcaecati! Explicabo at temporibus nam laboriosam rerum id rem!</p>
                        </div>
                        
                        <!-- "Projects" CTA -->
                        <div id="homeCtaMainContainer">
                            <a id="homeCta" href="#projectsSection" title="Projects section quick access">
                                <p>projects</p> 
                                <img id="homeCtaImg" src="https://cdn-icons-png.flaticon.com/128/4705/4705847.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Chatbot  -->
                
                <div id="chatbotContainer">
                    <div id="chatbotOpener">
                        <span id="chatWithMe">Chat with me</span>
                        <div id="chatIconContainer">
                            <img src="https://cdn-icons-png.flaticon.com/128/2076/2076218.png" alt="Chat icon" id="chatIcon" title="Click to deploy the chatbot">
                        </div>
                    </div>
                    <div id="chatbotHeader">
                        <img id="robotIcon" src="https://cdn-icons-png.flaticon.com/128/4712/4712003.png" alt="robot" class="hide">
                        <span id="helloChat" class="hide">Hi, I'm your personal chatbot, what can I do for you ?</span>
                        <div id="chatbotCloser" class="hide" title="Close chatbot">X</div>
                    </div>
                    <div id="chatContainer" class="hide">
                        <div id="chatField"></div>
                        <input id="chatInput" type="text" placeholder="Write something here..." autocomplete="off" autofocus="true">
                    </div>
                </div>

                <!-- home right sidenav -->

                <div id="rightSidenavContainer">
                    <ul>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="Click to access my Linkedin profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="Click to access my Facebook profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="Facebook icon"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="Click to access my Instagram profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="Instagram icon"></a>
                            
                        </li>
                        <li class="homeSocialIcons">
                            <a href="#" target="_blank" title="Click to access my Twitter profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128212.png" alt="Twitter icon"></a>
                        </li>
                    </ul>
                </div>

                <!-- Mouse animation -->

                <div id="mouse" title="Scroll down">
                    <div id="scrollContainer"></div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        
        <section id="aboutSection">
            <div class="defaultMainContainer">
                <div class="sectionTopContainers">
                    <h2 class="sectionTitle">about me</h2>
                    <p>Lorem ipsum dolor <strong>sit amet</strong> consectetur adipisicing elit. Aspernatur praesentium assumenda quidem <strong>ullam</strong> quibusdam perferendis reprehenderit accusantium, error numquam id impedit <strong>aut sit beatae</strong> odit qui labore ad minima? Qui.</p>
                </div>
                <div id="aboutSectionMainContainer">

                    <!-- bio -->

                    <div id="bioContainer" class="aboutSectionContainers">
                        <h3 class="aboutSectionTitles">more about me</h3>
                        <p>Lorem ipsum dolor, sit amet <strong>consectetur</strong> adipisicing elit. Perferendis facilis enim fuga! <strong>Similique</strong> reprehenderit labore sed asperiores quod, voluptatibus fuga.</p>
                        <p class="bioP">Lorem ipsum dolor, sit amet consectetur <strong>adipisicing elit</strong>. Perferendis facilis enim fuga! Similique reprehenderit labore sed asperiores quod, <strong>voluptatibus</strong> fuga.</p>
                        <p class="bioP">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis facilis enim fuga! Similique <strong>reprehenderit labore</strong> sed asperiores quod, voluptatibus fuga.</p>

                        <!-- "Contact me" CTA -->

                        <div class="ctaContainers">
                            <a href="#contactSection" class="cta" title="Contact me">contact</a>
                        </div>
                    </div>

                    <!-- skills -->

                    <div id="skillsMainContainer" class="aboutSectionContainers">
                        <h3 class="aboutSectionTitles">skills</h3>
                        <div id="skillsContainer">
                            <div class="skills">Lorem</div>
                            <div class="skills">Lorem, ipsum.</div>
                            <div class="skills">Lorem</div>
                            <div class="skills">Lorem, ipsum dolor.</div>
                            <div class="skills">Lorem ipsum dolor sit.</div>
                            <div class="skills">Lorem</div>
                            <div class="skills">Lorem, ipsum.</div>
                            <div class="skills block">Lorem</div>
                            <div class="skills block">Lorem, ipsum.</div>
                            <div class="skills block">Lorem</div>
                            <div class="skills block">Lorem, ipsum dolor.</div>
                            <div class="skills block">Lorem ipsum dolor sit.</div>
                            <div class="skills block">Lorem</div>
                            <div class="skills block">Lorem, ipsum.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->

        <section id="projectsSection">
            <div class="sectionTopContainers">
                <h2 class="sectionTitle">projects</h2>
                <p class="projectP">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repudiandae cumque quasi debitis illo consequuntur, temporibus exercitationem pariatur itaque impedit!</p>
            </div>
            <div id="projectsSectionMainContainer">

                <!-- project 1 -->

                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1107659862634147922/MrDisco_philosophie_grec_athene_1920x1280_d354458b-c7d3-4fdc-98c2-54a1c601d1b6.png?width=702&height=702" alt="">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles">Lorem ipsum dolor sit.</h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription">
                            Lorem ipsum, dolor sit <strong>amet consectetur</strong> adipisicing elit. <strong>Maiores</strong>, ullam?
                        </p>
                    </div>
                </div>
                
                <!-- project 2 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254530947072070/MrDisco_philosophie_grec_athene_b9aa5efe-ed88-4b04-9425-9b3373d03d02.png?width=702&height=702" alt="">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles">Lorem ipsum dolor sit.</h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription">
                            Lorem ipsum, dolor sit <strong>amet consectetur</strong> adipisicing elit. <strong>Maiores</strong>, ullam?
                        </p>
                    </div>
                </div>

                <!-- project 3 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254536118648873/MrDisco_philosophie_grec_athene_c1a4ff3d-2e3b-4273-bbcf-33b5f35859d4.png?width=702&height=702" alt="">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles">Lorem ipsum dolor sit.</h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription">
                            Lorem ipsum, dolor sit <strong>amet consectetur</strong> adipisicing elit. <strong>Maiores</strong>, ullam?
                        </p>
                    </div>
                </div>

                <!-- project 4 -->
                
                <div class="projectsMainContainers">
                    <div class="projectsContainers projectsImgContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254541533483138/MrDisco_philosophie_grec_athene_a6153f58-8ac5-4fc4-be57-1cb8b0f8b013.png?width=702&height=702" alt="">
                    </div>
                    <div class="projectsContainers">
                        <h4 class="projectsTitles">Lorem ipsum dolor sit.</h4>
                    </div>
                    <div class="projectsContainers">
                        <p class="projectsDescription">
                            Lorem ipsum, dolor sit <strong>amet consectetur</strong> adipisicing elit. <strong>Maiores</strong>, ullam?
                        </p>
                    </div>
                </div>
            </div>

            <!-- "Projects gallery" CTA -->

            <div class="ctaContainers">
                <a href="/gallery.html" class="cta" rel="noreferrer" title="Click to access projects gallery">Gallery</a>
            </div>
        </section>

        <!-- Contact Section -->

        <section id="contactSection">
            <div class="defaultMainContainer">
                <div class="sectionTopContainers">
                    <h2 class="sectionTitle">contact</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores repudiandae cumque quasi debitis illo consequuntur, temporibus exercitationem pariatur itaque impedit!</p>
                </div>
            </div>

            <!-- Contact form -->

            <div class="formMainContainer" id="contactFormContainer">
                <div class="card">
                    <div class="cardLogoContainer">
                        <img src="https://cdn-icons-png.flaticon.com/128/1182/1182791.png" alt="brain svg" class="formLogo">
                    </div>
                    <div class="cardHeader">
                        <h3 class="formTitle">Contact us</h3>
                        <p class="formTxt">Please fill this form before submitting</p>
                    </div>
                    <form action="./assets/inc/contactForm_process.php" method="POST" class="forms" id="contactForm">
                        <div class="formItem">
                            <label for="name"></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">person</span>
                                <input type="text" name="name" id="nameInput" aria-describedby="nameError nameValidation" class="formInput" placeholder="Enter your full name" onblur="validateName(this)" required>
                            </div>
                            <div class="nameValidation" aria-live="polite"></div>
                            <div class="nameError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="email"></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">mail</span>
                                <input type="email" name="email" id="emailInput" class="formInput" aria-describedby="emailError emailValidation" placeholder="Enter Email" onblur="validateEmail(this)" required>
                            </div>
                            <div class="emailValidation" aria-live="polite"></div>
                            <div class="emailError" aria-live="polite"></div>
                        </div>
                        <div class="formItem">
                            <label for="message"></label>
                            <div class="inputContainers">
                                <span class="itemIcon material-symbols-outlined">comment</span>
                                <input type="text" name="message" aria-describedby="messageError messageValidation" class="formInput messageInput" placeholder="Your message" onblur="validateMessage(this)" required>
                            </div>
                            <div class="messageValidation" aria-live="polite"></div>
                            <div class="messageError" aria-live="polite"></div>
                        </div>
                        <button class="formBtn" name="submit" type="submit">submit</button>
                        <div class="errorMessagesContainers">
                            <div id="contactErrorMessage"></div>
                        </div>
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
                <p id="footerName">your name</p>
                <p id="footerBio">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis blanditiis eveniet nisi.</p>
            </div>
            <div id="footerSocialContainer">
                <h2>social</h2>
                <ul>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Linkedin profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128219.png" alt="Linkedin icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Facebook profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128208.png" alt="Facebook icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Instagram profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/717/717392.png" alt="Instagram icon"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" title="Click to access my Twitter profile" rel="noreferrer"><img src="https://cdn-icons-png.flaticon.com/128/3128/3128212.png" alt="Twitter icon"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="propertyContainer">
            <p>Made by <a href="https://www.simonbenet.com/enVersion.html" target="_blank" title="Direct link to Simon Bénet portfolio">Simon Bénet</a> in 2023</p>
        </div>
    </footer>
</body>
</html>