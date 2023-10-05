const showIcon = document.getElementById("showIcon")
const hideIcon = document.getElementById("hideIcon")
const passwordInput = document.getElementById("passwordInput")

showIcon.addEventListener("click", () => {
    passwordInput.type = "text"
    showIcon.style.display = "none"
    hideIcon.style.display = "block"
})
  
hideIcon.addEventListener("click", () => {
    passwordInput.type = "password"
    hideIcon.style.display = "none"
    showIcon.style.display = "block"
})