function validateForm() {
    var x = document.forms["myForm"]["pass"].value;
    var x1 = document.forms["myForm"]["repass"].value;
    if (x != x1) {
        alert("Password do not match");
        return false;
    }
}