<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin connection</title>

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
     <script src="assets/js/persistantColorMode.js" defer></script>
     <script src="assets/js/adminLoginFormShowHidePassword.js" defer></script>
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
                <li class="quickAccess">
                    <a href="index.htmlgallery.html" title="Contact section quick access">gallery</a>
                </li>
            </ul>
        </div>
    </header>

    <main id="adminConnectionPageMain">
        <div id="adminConnectionFormMainContainer">
            <h1>administrator page connection</h1>
            <div id="adminConnectionFormContainer">

            <!-- Admin page login form -->

                <form action="./assets/inc/adminLoginFormProcess.php" method="POST">
                    <div class="labelsInputsContainer">
                        <label for="id">id</label>
                        <div class="inputContainers">
                            <span class="itemIcon material-symbols-outlined">person</span>
                            <input name="id" type="text" placeholder="Your id..." aria-describedby="idError idValidation" required>
                            <div id="idValidation" aria-live="polite"></div>
                            <div id="idError" aria-live="polite"></div>
                        </div>
                    </div>
                    <div class="labelsInputsContainer">
                        <label for="password">password</label>
                        <div class="inputContainers">
                            <span class="itemIcon material-symbols-outlined">lock</span>
                            <input id="passwordInput" name="password" type="password" placeholder="Your password..." aria-describedby="passwordError passwordValidation" required>
                            <span class="material-symbols-outlined" id="hideIcon">visibility_off</span>
                            <span class="material-symbols-outlined" id="showIcon">visibility</span>
                            <div id="passwordError" aria-live="polite"></div>
                            <div id="passwordValidation" aria-live="polite"></div>
                        </div>
                    </div>
                    <button id="submitBtn" type="submit" title="Click to login">submit</button>
                </form>
            </div>
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