
document.getElementById("ss-form").addEventListener("submit", function(event) {
event.preventDefault(); // Prevent the form from submitting normally

var userName = document.getElementById("name").value;
if (userName.trim() !== "") {
    alert("Hello " + userName + "! Welcome to our website.");
} else {
    alert("Please enter your name in the input field.");
}
});


