//#region logout functionality
fetch('helper/is_logged_in.php')
    .then(res => res.json()) // don't need?
    .then(function (res) {
        if (res.status == 'yes') {
            const login = document.querySelector('#login')
            login.style.display = 'none'
            const logout = document.querySelector('#logout')
            logout.style.display = 'inline-block'

            logout.addEventListener('click', function (e) {
                e.preventDefault()
                fetch('helper/logout_ajax.php')
                    .then(res => res.json()) // need?
                    .then(function (res) {
                        if (res.status == 'success') {
                            window.location.href = "login.php"
                            // login.style.display = 'inline-block'
                            // logout.style.display = 'none'
                            // document.querySelector('#message').innerHTML = '<p>You have been logged out.</p>'
                        }
                    })
            })
        }
    })

//#endregion


//#region check username function
// get a handle on the form
const form = document.querySelector('#registration-form')
// get a handle on input to be tested
const input = document.querySelector(".registration-username")
// specify characters to be searched 
// (use regexr.com or regex101.com to help you define your search pattern)
const regex = /[\s\.\-\/\,\\\@]/gi

const error_msg = document.querySelector('#bad-username')

function checkFormInput(inputString, regex) {
    // add an event listener to the form
    form.addEventListener('submit', (e) => {
        // match executes a search on string using the regex variable's specs 
        const match = regex.exec(inputString.value)

        // if there's no match - you're good
        if (!match) {
            console.log(inputString.value + ' - PASS')
            // error_msg.classList.remove('bad-username')
        } else {
            // don't allow submission 
            e.preventDefault()
            // ask user to change their input
            console.error(`${inputString.value} - FAIL`)
            error_msg.classList.add('bad-username')
        }
    })
}

// call function
checkFormInput(input, regex)

//#endregion