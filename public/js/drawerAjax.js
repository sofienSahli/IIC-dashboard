let url = "http://127.0.0.1:8000/"
let request_interval = 10000;
document.addEventListener("DOMContentLoaded", function () {
    setInterval(function () {
        submitedVotes();
    }, request_interval);
    setInterval(function () {
        disabledAccoutns();
    }, request_interval);
});


//Update New Votes Badges
function submitedVotes() {
    let request = new XMLHttpRequest();
    request.open('get', url + "new-applications", true);
    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                if (request.response > 0)
                    document.getElementById("submited-to-vote-badge").innerText = request.response;
                else
                    document.getElementById("submited-to-vote-badge").style = "display: none;";
            } else {
                console.log(request.error);
            }
        }
    }
    request.send();

}

//Show disabled accounts
function disabledAccoutns() {
    let request = new XMLHttpRequest();
    request.open('get', url + "disabled-accounts", true);

    request.onreadystatechange = function () {
        if (request.readyState === 4) {
            if (request.status === 200) {
                if (request.response > 0)
                    document.getElementById("accounts_badge").innerText = request.response;
                else
                    document.getElementById("accounts_badge").style = "display: none;";
            } else {
                console.log(request.error);
            }
        }
    }
    request.send();
}


/*
accounts_badge
*/