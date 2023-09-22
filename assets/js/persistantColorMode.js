const darkModeBtn = document.getElementById("darkModeBtn")
const lightModeBtn = document.getElementById("lightModeBtn")
const body = document.body

if (sessionStorage.getItem("colormode") == "darkmode") {
    darkMode()
} else {
    lightMode()
}

lightModeBtn.addEventListener("click", () => {
    lightMode()
})

darkModeBtn.addEventListener("click", () => {
    darkMode()
})

function lightMode() {
    if (lightModeBtn.classList.contains("active")) {
    
        lightModeBtn.classList.remove("active")
        lightModeBtn.classList.add("noActive")

        darkModeBtn.classList.remove("noActive")
        darkModeBtn.classList.add("active")

        body.classList.remove("dark")
        body.classList.add("light")

        sessionStorage.setItem("colormode", "lightmode")
    }
}

function darkMode() {
    if (darkModeBtn.classList.contains("active")) {
    
        darkModeBtn.classList.remove("active")
        darkModeBtn.classList.add("noActive")

        lightModeBtn.classList.remove("noActive")
        lightModeBtn.classList.add("active")

        body.classList.remove("light")
        body.classList.add("dark")

        sessionStorage.setItem("colormode", "darkmode")
    }
}