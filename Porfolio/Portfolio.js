
window.transitionToPage = function(href) {
  document.querySelector('body').style.opacity = 0
  setTimeout(function() { 
      window.location.href = href
  }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
  document.querySelector('body').style.opacity = 1
})


function search_card() {
  let input = document.getElementById('searchbar').value.toLowerCase();
  let cards = document.getElementsByClassName('card-grid-space');
  let firstMatch = null;

  for (let i = 0; i < cards.length; i++) {
    let card = cards[i];
    let sprintName = card.getAttribute('data-space').toLowerCase();

    if (sprintName.includes(input)) {
      card.style.display = "block"; // Show the matching card
      if (!firstMatch) {
        firstMatch = card; // Store the first matching card
      }
    } else {
      card.style.display = "none"; // Hide non-matching cards
    }
  }

  if (!firstMatch) {
    showAlert("No matching Sprints found.");
  }
}

function showAlert(message) {
  let alertBox = document.getElementById('customAlert');
  let closeBtn = document.getElementById('closeAlert');
  alertBox.querySelector('p').textContent = message;
  alertBox.style.display = "block";

  closeBtn.onclick = function() {
    alertBox.style.display = "none";
  }

  // Close the alert when clicking anywhere outside the alert box
  window.onclick = function(event) {
    if (event.target == alertBox) {
      alertBox.style.display = "none";
    }
  } 
}


