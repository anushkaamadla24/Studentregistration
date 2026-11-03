function validateForm() {
    let name = document.forms["registrationForm"]["fullname"].value;
    let phone = document.forms["registrationForm"]["phone"].value;

    if (name.trim() === "") {
        alert("Please enter your full name.");
        return false;
    }

    if (!/^[0-9]{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    return true;
}