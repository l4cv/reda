/* switch bouton */
function toggleTheme() {
    var body = document.querySelector('body');
    var modeLabel = document.getElementById('mode-label');
  
    if (body.classList.contains('dark-theme')) {
      body.classList.remove('dark-theme');
      modeLabel.innerText = 'Mode Sombre';
    } else {
      body.classList.add('dark-theme');
      modeLabel.innerText = 'Mode Clair';
    }
  }
  
  
  
  function selectQuantity(element) {
    var options = document.querySelectorAll('.quantity-info');
    options.forEach(function(option) {
        option.parentElement.classList.remove('selected');
    });
    element.classList.add('selected');

    // Mettre à jour le prix en fonction de la quantité sélectionnée
    var selectedQuantity = element.querySelector('p').textContent;
    var price = calculatePrice(selectedQuantity);
    document.getElementById('product-price').textContent = price + " €";
}

function calculatePrice(selectedQuantity) {
    switch (selectedQuantity) {
        case "1 kg":
            return "29,99";
        case "2.5 kg":
            return "49,99";
        case "500 g":
            return "19,99";
        default:
            return "29,99";
    }
}



