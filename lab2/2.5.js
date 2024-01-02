function isAlphaNum(str){
    return /^[a-zA-Z0-9]+$/.test(str)
    
}
console.log(isAlphaNum("string123"))
console.log(isAlphaNum("@lpha123"))