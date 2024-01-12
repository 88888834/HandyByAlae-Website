document.addEventListener("DOMContentLoaded", function() {
    var newsletterForm = document.getElementById("newsletterForm");
    newsletterForm.addEventListener("submit", function(event) {
      event.preventDefault(); //
      var firstName = document.getElementById("firstName").value;
      var lastName = document.getElementById("lastName").value;
      var email = document.getElementById("emailAddress").value;
  
      if (!firstName || !lastName || !email) {
        alert("Please fill out all the fields.");
        return;
      }
  
      if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return;
      }
      var thankYouModal = document.getElementById('thankYouModal');
      var thankYouMessage = document.getElementById('thankYouMessage');
      thankYouMessage.textContent = "Thank you for subscribing, " + firstName + "!";
      thankYouModal.style.display = 'block';
    });
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
      thankYouModal.style.display = "none";
    };
    window.onclick = function(event) {
      if (event.target == thankYouModal) {
        thankYouModal.style.display = "none";
      }
    };
    
    function validateEmail(email) {
      var re =/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }
  });
  