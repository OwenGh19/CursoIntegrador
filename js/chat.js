function sendSuggestedQuestion(question) {
    document.getElementById("user-input").value = question;
    sendMessage();
}

function sendMessage() {
    var userMessage = document.getElementById("user-input").value;
    document.getElementById("user-input").value = "";

    document.getElementById("chat").innerHTML += '<div class="message user-message">' + userMessage + '</div';

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "chatbot.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("userMessage=" + userMessage);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("chat").innerHTML += '<div class="message">' + xhr.responseText + '</div>';
        }
    };
}
