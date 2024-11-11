const checkboxQuestion1 = document.querySelectorAll(".checkboxQuestion1")
const checkboxQuestion2 = document.querySelectorAll(".checkboxQuestion2")
const otherInputQuestion2 = document.querySelectorAll(".otherInputQuestion2")

checkboxQuestion1.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
        if(checkbox.value == "Autre" && checkbox.checked) {
            checkboxQuestion1.forEach(checkbox => {
                checkbox.checked = false
                checkbox.required = false
            })
            checkbox.checked = true
        } else if(checkbox.value != "Autre" && checkbox.checked) {
            checkboxQuestion1.forEach(checkbox => {
                checkbox.required = false
                if(checkbox.value == "Autre") {
                    checkbox.checked = false
                }
            })
            checkbox.checked = true
        }
        let i = 0
        checkboxQuestion1.forEach(checkbox => {
            if(!checkbox.checked) {
                i++
            }
        })
        if(i == 7) {
            checkboxQuestion1.forEach(checkbox => {
                checkbox.required = true
            });
        }
    })
})

checkboxQuestion2.forEach((checkbox) => {
    checkbox.addEventListener("change", () => {
        if(checkbox.checked) {
            checkboxQuestion2.forEach(checkbox => {
                checkbox.checked = false
                checkbox.required = false
            })
            checkbox.checked = true
        } else {
            checkboxQuestion2.forEach(checkbox => {
                checkbox.required = true
            })
        }
        if (checkbox.value == "Oui" && checkbox.checked) {
            otherInputQuestion2.forEach(input => {
                input.disabled = false
                input.required = true
            })
        } else if(checkbox.value == "Non" && checkbox.checked) {
            otherInputQuestion2.forEach(input => {
                input.disabled = true
                input.required = false
            })
        }
        let i = 0
        checkboxQuestion2.forEach(checkbox => {
            if(!checkbox.checked) {
                i++
            }
        })
        if(i == 2) {
            otherInputQuestion2.forEach(input => {
                input.required = false
                input.disabled = true
            })
        }
    })
})
