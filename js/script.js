// get a handle on the username input and form
const form = document.querySelector('#registration-form')
const username = document.querySelector(".registration-username")

// assign characters that aren't allowed
// checks for
//     spaces
//     .
//     -
//     /
//     ,
//     \
const regex = /[\s\.\-\/\,\\]/gi

// check
function checkUsername(username) {
    form.addEventListener('submit', (e) => {
        const match = regex.exec(username.value)
        if (!match) {
            console.log(username.value + 'is a good username.')
        } else {
            e.preventDefault()
            console.error(username.value + ' isn\'t a good username - don\'t use special characters')
        }
    })
}

checkUsername(username)