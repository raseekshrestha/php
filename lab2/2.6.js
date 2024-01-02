function isEmail(email){
    return /^[\w\d+._-]+@[\w\d]+\.[\w]+(.[\w]{2,})*$/.test(email)
}

function validPassword(pass){
    return /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/.test(pass)
}

console.log(isEmail("john.doe123@tuiost.com.np"))
console.log(isEmail("myemail123@gmail"))

console.log(validPassword("strongpass"))
console.log(validPassword("strongpaSS123"))
