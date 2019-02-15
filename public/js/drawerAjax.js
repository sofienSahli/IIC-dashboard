let url = "http://localhost:8000/"

document.addEventListener("DOMContentLoaded", function () {
    setInterval(function () {
        submitedVotes();
    }, 1000);
    setInterval(function () {
        disabledAccoutns();
    }, 1000);
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