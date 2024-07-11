const burgerMenuOpenerContainer = document.getElementById("burgerMenuOpenerContainer")
const burgerMenuCloserContainer = document.getElementById("burgerMenuCloserContainer")
const burgerMenu = document.getElementById("burgerMenu")


burgerMenuOpenerContainer.addEventListener("click", () => {
    burgerMenu.style.display = "block"
    burgerMenuOpenerContainer.style.display = "none"
    burgerMenuCloserContainer.style.display = "block"
})

burgerMenuCloserContainer.addEventListener("click", () => {
    burgerMenu.style.display = "none"
    burgerMenuOpenerContainer.style.display = "block"
    burgerMenuCloserContainer.style.display = "none"
})