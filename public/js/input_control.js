function registerDataIntegrity() {


    var name = document.getElementById('name');
    var last_name = document.getElementById('last_name');
    var birth_date = document.getElementById('birth_date');
    var degree = document.getElementById('degree');
    var exampleInputEmail1 = document.getElementById('exampleInputEmail1');
    var exampleInputPassword1 = document.getElementById('exampleInputPassword1');
    var confirm_password = document.getElementById('confirm_password');

    if (name.value.toString() == "") {
        document.getElementById('name_label').style.color = "red";
        document.getElementById('name_label').value = "Please enter your name";
        name.style.borderStyle = "solid";
        name.style.borderColor = "red";
        name.style.borderRadius = "5px";

    } else if (last_name.value.toString() == "") {
        document.getElementById('last_name_label').style.color = "red";
        document.getElementById('last_name_label').value = "Please enter your last name";
        last_name.style.borderStyle = "solid";
        last_name.style.borderColor = "red";
        last_name.style.borderRadius = "5px";
    } else if (birth_date.value.toString() == "") {
        alert("Please enter your birth date  ");
    } else if (degree.value.toString() == "") {

        document.getElementById('degree_label').style.color = "red";
        document.getElementById('degree_label').value = "Please enter your degreee";
        degree.style.borderStyle = "solid";
        degree.style.borderColor = "red";
        degree.style.borderRadius = "5px";
    } else if (exampleInputEmail1.value.toString() == "") {
        document.getElementById('exampleInputEmail1_label').style.color = "red";
        document.getElementById('exampleInputEmail1_label').value = "Please enter your email id";
        exampleInputEmail1.style.borderStyle = "solid";
        exampleInputEmail1.style.borderColor = "red";
        exampleInputEmail1.style.borderRadius = "5px";
    } else if ((exampleInputPassword1.value.toString() == confirm_password.value.toString()) && (exampleInputPassword1.value.toString() != "")) {
        document.getElementById('inscription_form').submit();
    } else {
        alert('Password does not match');
    }
}

function filesubmited() {

    document.getElementById("file-text").innerText = document.getElementById("image_file").value.split("\\").pop();
}