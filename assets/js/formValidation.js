const submitInputs = document.querySelectorAll("input[type='submit']")

const nameInput = document.getElementById("nameInput")
const nameValidationMessage = document.querySelector(".nameValidation")
const nameErrorMessage = document.querySelector(".nameError")

const emailInput = document.getElementById("emailInput")
const emailValidationMessages = document.querySelectorAll(".emailValidation")
const emailErrorMessages = document.querySelectorAll(".emailError")

const messageInput = document.querySelector(".messageInput")
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

const resetForm = (form) => {
    form.reset()
    clearErrorMessage(contactErrorMessage)
    nameValidationMessage.innerHTML = ""
    emailValidationMessages.forEach((message) => {
        message.innerHTML = ""
    })
    messageValidationMessage.innerHTML = ""
}

const validateName = (input) => {
    if (input.value === "" || input.value == null) {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "Your name must be complete"
    } else if (!input.value.match(/^[A-Za-z\s]+$/)) {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "The name must be in correct format"
    } else {
        nameErrorMessage.innerHTML = ""
        nameValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

const validateEmail = (input) => {
    if (input.value === "" || input.value == null) {
        emailValidationMessages.forEach((message) => {
            message.innerHTML = ""
        })
        emailErrorMessages.forEach((message) => {
            message.innerHTML = "Your email must be complete"
        })
    } else if (!input.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        emailValidationMessages.forEach((message) => {
            message.innerHTML = ""
        })
        emailErrorMessages.forEach((message) => {
            message.innerHTML = "Your email must be in correct format"
        })
    } else {
        emailErrorMessages.forEach((message) => {
            message.innerHTML = ""
        })
        emailValidationMessages.forEach((message) => {
            message.innerHTML = "<i class='fas fa-check-circle'></i>"
        })
    }
}

const validateMessage = (input) => {
    if (input.value === "" || input.value == null) {
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

    const errorMessages = [nameErrorMessage.innerHTML, ...emailErrorMessages, messageErrorMessage.innerHTML]

    if (errorMessages.some(message => message !== "")) {
        displayMessage(contactErrorMessage, "Please fill the form correctly before submitting.", "red")
        e.preventDefault()
    } else {
        displayMessage(contactErrorMessage, "Your form has been submitted successfully.", "mediumseagreen")
        resetForm(contactForm)
    }
})