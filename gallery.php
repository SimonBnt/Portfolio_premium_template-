<!DOCTYPE html>
<html lang="en">
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

    <!-- link Leaflet -->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    
    <!-- scipt Leaflet -->

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <!-- script js -->

    <script src="assets/js/burgermenu.js" defer></script>
    <script src="assets/js/map.js" defer></script>
    <script src="assets/js/persistantColorMode.js" defer></script>
    <script src="assets/js/formValidation.js" defer></script>
</head>
<body>
    <header>
        <div id="headerMainContentContainer">
            <div id="logo-colorModeContainer">

                <!-- logo -->

                <img id="logo" src="https://images.pexels.com/photos/3777946/pexels-photo-3777946.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Portrait/logo">
                <p>your name</p>

                <!-- color mode -->

                <div id="colorModeContainer">
                    <div id="darkModeBtn" class="colorModeBtns darkMode active" title="Dark mod"><img class="colorModeBtnImg active" src="https://cdn-icons-png.flaticon.com/128/4129/4129208.png" alt="Moon icon"></div> 
                    <div id="lightModeBtn" class="colorModeBtns lightMode noActive" title="Light mod"><img class="colorModeBtnImg noActive" src="https://cdn-icons-png.flaticon.com/128/54/54455.png" alt="Sun icon"></div>
                </div>
            </div>
            <div id="navbar">
                <ul>
                    <li class="quickAccess">
                        <a href="index.html#homeSection" title="Home section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/73/73417.png" alt=""><p class="navbarTxt">home</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.html#aboutSection" title="About section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/3817/3817173.png" alt=""><p class="navbarTxt">about</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.html#projectsSection" title="Projects section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/6002/6002182.png" alt=""><p class="navbarTxt">projects</p></a>
                    </li>
                    <li class="quickAccess">
                        <a href="index.html#contactSection" title="Contact section quick access"><img class="navbarIcons" src="https://cdn-icons-png.flaticon.com/128/1250/1250663.png" alt=""><p class="navbarTxt">contact</p></a>
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
                    <a href="index.html#homeSection" title="Home section quick access">home</a>
                </li>
                <li class="quickAccess">
                    <a href="index.html#aboutSection" title="About section quick access">about</a>
                </li>
                <li class="quickAccess">
                    <a href="index.html#projectsSection" title="Projects section quick access">projects</a>
                </li>
                <li class="quickAccess">
                    <a href="index.html#contactSection" title="Contact section quick access">contact</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <section id="gallery">
            <h1>gallery</h1>
            <div id="galleryMainContainer">
    
                <!-- project 1 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1107659862634147922/MrDisco_philosophie_grec_athene_1920x1280_d354458b-c7d3-4fdc-98c2-54a1c601d1b6.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
    
                <!-- project 2 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254530947072070/MrDisco_philosophie_grec_athene_b9aa5efe-ed88-4b04-9425-9b3373d03d02.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
                
                <!-- project 3 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254536118648873/MrDisco_philosophie_grec_athene_c1a4ff3d-2e3b-4273-bbcf-33b5f35859d4.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
    
                <!-- project 4 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254541533483138/MrDisco_philosophie_grec_athene_a6153f58-8ac5-4fc4-be57-1cb8b0f8b013.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
    
                <!-- project 5 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1107659862634147922/MrDisco_philosophie_grec_athene_1920x1280_d354458b-c7d3-4fdc-98c2-54a1c601d1b6.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
    
                <!-- project 6 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254530947072070/MrDisco_philosophie_grec_athene_b9aa5efe-ed88-4b04-9425-9b3373d03d02.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
                
                <!-- project 7 -->
    
                <div class="projectsGalleryMainsContainers right">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254536118648873/MrDisco_philosophie_grec_athene_c1a4ff3d-2e3b-4273-bbcf-33b5f35859d4.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
    
                <!-- project 8 -->
    
                <div class="projectsGalleryMainsContainers left">
                    <h2 class="projectsGalleryTitles">Lorem, ipsum dolor.</h2>
                    <div class="projectsGalleryContainers">
                        <img src="https://media.discordapp.net/attachments/1092724733004480592/1106254541533483138/MrDisco_philosophie_grec_athene_a6153f58-8ac5-4fc4-be57-1cb8b0f8b013.png?width=702&height=702" alt="" class="projectsGalleryItems projectsGalleryImgs">
                        <div class="projectsGalleryCtaDescriptionContainer">
                            <p class="projectsGalleryItems projectsGalleryDescriptions">Lorem ipsum <strong>dolor</strong> sit amet <strong>consectetur</strong> adipisicing elit. <strong>Consequatur</strong>, a.</p>
                            <a href="" title="Click here to ''" target="_blank" class="projectsGalleryCta">do something here !</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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