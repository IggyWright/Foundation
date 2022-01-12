function verifyAndSubmit() {
    var name = document.getElementById("name");
    var email = document.getElementById("email");
    var message = document.getElementById("messageTextArea");

    var inputs = [name, email, message];

    var verified = true;

    if(validateEmail(email.value)) {
        for(var i = 0; i < inputs.length; i++) {
            if(inputs[i].value.length === 0) {
                inputs[i].placeholder = "Required";
                verified = false;
            }
        }
    } else {
        email.value = null;
        email.placeholder = "Invalid";
        verified = false;
    }

    if(verified) {
        document.getElementById("formContainer").submit();
    }
}

function validateEmail(email) {
    console.log(email);
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(String(email).toLowerCase())
}
