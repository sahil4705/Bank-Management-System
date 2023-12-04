function validateForm() {
    const name = document.getElementById('name').value;
    const gender = document.getElementById('gender');
    const genderselect = gender.value;
    const mobile = document.getElementById('mobile').value;
    const email = document.getElementById('email').value;
    const birthdate = document.getElementById('birthdate').value;
    const pan_number = document.getElementById('pan_number').value;
    const state = document.getElementById('state').value;
    const city = document.getElementById('city').value;
    const home_address = document.getElementById('home_address').value;
    const pincode = document.getElementById('pincode').value;
    if (name == "") {
        alert("Please Enter Your name");
        return false;
    }
    else if (genderselect == "") {
        alert("Please Select Your Gender");
        return false;
    }
    else if (mobile == "") {
        alert("Please Enter Your Mobile Number");
        return false;
    }
    else if (email == "") {
        alert("Please Enter Your Email");
        return false;
    }
    else if (birthdate == "") {
        alert("Please Enter Your BirthDate");
        return false;
    }
    else if (pan_number == "") {
        alert("Please Enter Your Pan Number");
        return false;
    }
    else if (home_address == "") {
        alert("Please Enter Your Home Address");
        return false;
    }
    else if (state == "") {
        alert("Please Enter Your State Name");
        return false;
    }
    else if (city == "") {
        alert("Please Enter Your city Name");
        return false;
    }
    else if (pincode == "") {
        alert("Please Enter Your Pin Code");
        return false;
    }

    else {
        return true;
    }
}
