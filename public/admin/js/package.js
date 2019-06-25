function validateForm() {
    var packageType = document.getElementById("packageType");
    var packageDesc = document.getElementById("packageDesc");



    if (!packageType.checkValidity()) {
        document.getElementById("demo").innerHTML = packageType.validationMessage;
    } else {
        document.getElementById("demo").innerHTML = "";

    }


    if (!packageDesc.checkValidity()) {
        document.getElementById("demo1").innerHTML = packageDesc.validationMessage;
    } else {
        document.getElementById("demo1").innerHTML = "";

    }



}
