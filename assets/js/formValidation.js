const nameInput = document.getElementById("nameInput")
const nameValidationMessage = document.querySelector(".nameValidation")
const nameErrorMessage = document.querySelector(".nameError")

const emailInput = document.getElementById("emailInput")
const emailValidationMessage = document.querySelector(".emailValidation")
const emailErrorMessage = document.querySelector(".emailError")

const messageInput = document.getElementById("messageInput")
const messageValidationMessage = document.querySelector(".messageValidation")
const messageErrorMessage = document.querySelector(".messageError")

const contactForm = document.getElementById("contactForm")
const contactErrorMessage = document.getElementById("contactErrorMessage")

const displayMessage = (element, message, color) => {
    element.style.display = "block"
    element.innerHTML = message
    element.style.color = color
}

const clearErrorMessage = (errorMessage) => {
    errorMessage.innerHTML = ""
}

const resetForm = () => {
    reset()
    clearErrorMessage(contactErrorMessage)
    nameValidationMessage.innerHTML = ""
    emailValidationMessage.innerHTML = ""
    messageValidationMessage.innerHTML = ""
}

const validateName = (input) => {
    if (input.value.trim() === "") {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "Your name must be complete"
    } else if (!/^[A-Za-z\s]+$/.test(input.value.trim())) {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "The name must be in correct format"
    } else {
        nameErrorMessage.innerHTML = ""
        nameValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

const validateEmail = (input) => {
    if (input.value.trim() === "") {
        emailValidationMessage.innerHTML = ""
        emailErrorMessage.innerHTML = "Your email must be complete"
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())) {
        emailValidationMessage.innerHTML = ""
        emailErrorMessage.innerHTML = "Your email must be in correct format"
    } else {
        emailErrorMessage.innerHTML = ""
        emailValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

const validateMessage = (input) => {
    if (input.value.trim() === "") {
        messageValidationMessage.innerHTML = ""
        messageErrorMessage.innerHTML = "A message is necessary to understand your need."
    } else {
        messageErrorMessage.innerHTML = ""
        messageValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

contactForm.addEventListener("submit", (e) => {
    validateName(nameInput)
    validateEmail(emailInput)
    validateMessage(messageInput)

    const errorMessages = [nameErrorMessage.innerHTML, emailErrorMessage.innerHTML, messageErrorMessage.innerHTML]

    if (errorMessages.some(message => message !== "")) {
        displayMessage(contactErrorMessage, "Please fill the form correctly before submitting.", "indianred")
        e.preventDefault()
    } else {
        displayMessage(contactErrorMessage, "Your form has been submitted successfully.", "mediumseagreen")
        resetForm()
    }
})