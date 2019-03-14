let base_url = "http://localhost:8000/";
document.addEventListener("DOMContentLoaded", function () {
    setInterval(function () {
        track_discussion();
    }, 2000);
});


function sendMessage() {
    let message = document.getElementById('message_text').value;
    let other_user_id = document.getElementById('other_user').value;
    let user = document.getElementById('user').value;
    document.getElementById('message_text').value = "";
    var data = {};
    data.message = message;
    data.other_user_id = other_user_id;
    data.user = user;

    let request = new XMLHttpRequest();
    request.open('POST', base_url + "api/send/message", true);

    request.onreadystatechange = function () {
        if (request.readyState === 1) {
            // request.setRequestHeader('csrf-token', document.getElementById('token').getAttribute("content"));
            request.setRequestHeader('Content-type', 'application/json; charset=utf-8');

        } else if (request.readyState === 4) {
            if (request.status === 200) {

            } else {
                console.log(request.error);
            }
        }
    }
    request.send(JSON.stringify(data));
}

function track_discussion() {
    let other_user_id = document.getElementById('other_user').value;
    let user = document.getElementById('user').value;
    let request = new XMLHttpRequest();
    request.open('get', base_url + "api/active/message/" + user + "/" + other_user_id, true);
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                display_message(JSON.parse(request.response))
            } else {
                console.log(request.error);
            }
        }
    }
    request.send();
}

function display_message(object) {
    document.getElementById("scrollable").innerHTML = " ";
    for (i = 0; i < object.length; i++) {
        let message = object[i];
        if (message.receiver_id != document.getElementById('user').value) {
            document.getElementById("scrollable").innerHTML +=
                "<div class='col-12 d-inline-flex  justify-content-end message-container'>" +
                "<div class='message-box bg-info'> " + message.message +
                "</div>" +
                "</div>"
        } else {
            document.getElementById("scrollable").innerHTML +=
                " <div class='col-12 d-inline-flex  justify-content-start message-container'>" +
                "<div class='message-box blue-gradient-rgba'> " + message.message +
                "</div>" +
                "</div>"
        }
    }
}

function switch_discussion(user) {
    console.log(user);
    document.getElementById("other_user").value = user.id;
    document.getElementById("other_name").innerText = user.name + " " + user.last_name;
    document.getElementById("other_phone").innerText = user.phone_number;
    document.getElementById("ohter_email").innerText = user.email;
    document.getElementById("ohter_email").innerText = user.email;
    document.getElementById("other_picture").src = base_url + user.profile_picture;
    track_discussion();

}