document.addEventListener("DOMContentLoaded", () => {
    const languageIcon = document.getElementById("languageIcon")
    const dropDownContainer = document.getElementById("dropDownContainer")

    languageIcon.addEventListener("click", () => {
        if (!dropDownContainer.classList.contains("open")) {
            openLanguageDropDownMenu()
        } else {
            closeLanguageDropDownMenu()
        }
    })

    document.addEventListener("click", (e) => {
        if (!dropDownContainer.contains(e.target) && !languageIcon.contains(e.target)) {
            closeLanguageDropDownMenu()
        }
    })

    function openLanguageDropDownMenu() {
        dropDownContainer.classList.add("open")
    }

    function closeLanguageDropDownMenu() {
        dropDownContainer.classList.remove("open")
    }
})