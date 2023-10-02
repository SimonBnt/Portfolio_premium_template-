document.addEventListener("DOMContentLoaded", () => {
    const chatbotContainer = document.getElementById("chatbotContainer")
    const chatbotOpener = document.getElementById("chatbotOpener")
    const chatIconContainer = document.getElementById("chatIconContainer")
    const helloChat = document.getElementById("helloChat")
    const robotIcon = document.getElementById("robotIcon")
    const chatWithMe = document.getElementById("chatWithMe")
    const chatContainer = document.getElementById("chatContainer")
    const chatbotHeader = document.getElementById("chatbotHeader")
    const chatbotCloser = document.getElementById("chatbotCloser")
    const chatInput = document.getElementById("chatInput")

    chatbotOpener.addEventListener("click", () => {
        chatbotContainer.classList.toggle("open")
        chatbotCloser.style.display = "block"
        chatbotOpener.classList.toggle("hide")
        chatIconContainer.classList.toggle("hide")
        helloChat.classList.toggle("hide")
        robotIcon.classList.toggle("hide")
        chatWithMe.classList.toggle("hide")
        chatContainer.classList.toggle("hide")
        // chatbotHeader.style.borderBottom = "solid 2px #333"
        chatInput.focus()
    })

    chatbotCloser.addEventListener("click", () => {
        closeChatbot()
    })

    document.addEventListener("click", (event) => {
        if (chatbotContainer.classList.contains("open") && !chatbotContainer.contains(event.target)) {
            closeChatbot()
        }
    })

    function closeChatbot() {
        chatbotContainer.classList.toggle("open")
        chatbotCloser.style.display = "none"
        chatbotHeader.style.borderBottom = "none"
        chatbotOpener.classList.toggle("hide")
        chatIconContainer.classList.toggle("hide")
        helloChat.classList.toggle("hide")
        robotIcon.classList.toggle("hide")
        chatWithMe.classList.toggle("hide")
        chatContainer.classList.toggle("hide")
    }
})