// Filter Js
$(document).ready(function () {
  $(".filter-item").click(function () {
    const value = $(this).attr("data-filter");
    if (value == "all") {
      $(".post-box").show("1000");
    } else {
      $(".post-box")
        .not("." + value)
        .hide("1000");
      $(".post-box")
        .filter("." + value)
        .show("1000");
    }
  });
  // Add active to btn
  $(".filter-item").click(function () {
    $(this).addClass("active-filter").siblings().removeClass("active-filter");
  });
});
// Header BackGround Change On Scroll
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
  header.classList.toggle("shadow", window.scrollY > 0);
});
let currentContentId = 'home'; 
function showContent(id) {
  const selectedContent = document.getElementById(id);
  const currentContent = document.getElementById(currentContentId);

  if (selectedContent && currentContent) {
    currentContent.classList.remove('active');
    selectedContent.classList.add('active');
    currentContentId = id; // Update current active content ID
  }
}
function ShareOnclick() {
  var username = document.getElementById('username').getAttribute('data-phpvalue');
  var status= document.getElementById("status").value;
  var inputValue = username + " : " + status;
  localStorage.setItem("newDiv", inputValue);
  window.onload = function() {
    var savedContent = localStorage.getItem("newDiv");
    if (savedContent) {
        // Display the saved content
        document.getElementById("message").innerHTML = savedContent;
    }
  }
  if (inputValue !== '') {
    // Create a new div element
    var newDiv = document.createElement('div');
    newDiv.className = 'status-history'; // Optional: Add a class for styling

    // Set the content of the new div
    newDiv.textContent = inputValue;

    // Get the message container div
    var messageContainer = document.getElementById('newDiv');

    // Append the new div to the message container
    messageContainer.appendChild(newDiv);

    // Clear the input field after creating the message
    document.getElementById('status').value = '';

    // Send the message to PHP using AJAX
    var formData = new FormData();
    formData.append('status', inputValue);

    fetch('loggedinblog.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .catch(error => {
      console.error('Error:', error);
    });
  }
}
function replyClick(ch) {
  var user = '@' + ch + ' ';
  
  // Récupérer la zone de texte par son ID
  var reply = document.getElementById("status");

  // Ajouter le texte de l'utilisateur à la fin de la zone de texte
  reply.value += user;

  // Mettre le focus sur la zone de texte
  reply.focus();

  // Placer le curseur à la fin du texte ajouté
  reply.selectionStart = reply.selectionEnd = reply.value.length;
}

