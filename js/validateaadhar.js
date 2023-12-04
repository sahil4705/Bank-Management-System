function validateaadhar() {
    var aadhaarNumber = document.getElementById('aadhar_card_no').value;

    if (validateAadhaarNumber(aadhaarNumber)) {
        return true;
    } else {
        alert('Invalid Aadhaar card number!');
        return false;
    }
}

function validateAadhaarNumber(aadhaarNumber) {
    // Aadhaar card number validation logic
    var aadhaarPattern = /^\d{12}$/;
    return aadhaarPattern.test(aadhaarNumber);
}
