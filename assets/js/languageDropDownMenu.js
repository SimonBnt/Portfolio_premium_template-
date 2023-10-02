document.addEventListener("DOMContentLoaded", () => {
    const dropDownIcon = document.getElementById("dropDownIcon")
    const dropDownContainer = document.getElementById("dropDownContainer")

    dropDownIcon.addEventListener("click", () => {
        openLanguageDropDownMenu()
    })

    document.addEventListener("click", (event) => {
        if (dropDownContainer.classList.contains("open") && !dropDownContainer.contains(event.target)) {
            closeLanguageDropDownMenu()
        }
    })

    function openLanguageDropDownMenu() {
        dropDownContainer.classList.toggle("open")
    }
    
    // function closeLanguageDropDownMenu() {
    //     dropDownContainer.classList.remove("open")
    // }
})