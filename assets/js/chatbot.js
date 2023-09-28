document.addEventListener("DOMContentLoaded", () => {
    const chatbotContainer = document.getElementById("chatbotContainer")
    const chatbotOpenner = document.getElementById("chatbotOpenner")
    const chatIconContainer = document.getElementById("chatIconContainer")
    const helloChat = document.getElementById("helloChat")
    const robotIcon = document.getElementById("robotIcon")
    const chatWithMe = document.getElementById("chatWithMe")
    const chatContainer = document.getElementById("chatContainer")
    const chatbotHeader = document.getElementById("chatbotHeader")
    const chatbotCloser = document.getElementById("chatbotCloser")

    chatbotOpenner.addEventListener("click", () => {
        chatbotContainer.style.border = "solid 2px #333"
        chatbotContainer.style.left = "0"
        chatbotContainer.style.right = "0"
        chatbotContainer.style.width = "300px"
        chatbotCloser.style.display = "block"
        chatbotHeader.style.borderBottom = "solid 2px #333"
        chatbotContainer.style.background = "white"
        chatbotOpenner.classList.toggle("hide")
        chatIconContainer.classList.toggle("hide")
        helloChat.classList.toggle("hide")
        robotIcon.classList.toggle("hide")
        chatWithMe.classList.toggle("hide")
        chatContainer.classList.toggle("hide")
    })
})