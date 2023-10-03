document.addEventListener("DOMContentLoaded", () => {
    const dropDownIcon = document.getElementById("dropDownIcon")
    const dropDownContainer = document.getElementById("dropDownContainer")

    dropDownIcon.addEventListener("click", () => {
        if (!dropDownContainer.classList.contains("open")) {
            openLanguageDropDownMenu()
        } else {
            closeLanguageDropDownMenu()
        }
    })

    document.addEventListener("click", (e) => {
        if (!dropDownContainer.contains(e.target) && !dropDownIcon.contains(e.target)) {
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