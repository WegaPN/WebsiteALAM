function setupModal() {
    var registerModal = document.getElementById("registerModal");
    var kecelakaanModal = document.getElementById("kecelakaanModal");
  
    var registerLink = document.querySelector('.register-link');
    var reportButton = document.getElementById('reportButton');
  
    var registerCloseBtn = document.querySelector('#registerModal .close');
    var kecelakaanCloseBtn = document.querySelector('#kecelakaanModal .close');
  
    if (registerLink) {
        registerLink.onclick = function(event) {
            event.preventDefault();
            registerModal.style.display = "block";
        }
    }
  
    if (reportButton) {
        reportButton.onclick = function() {
            kecelakaanModal.style.display = "block";
        }
    }
  
    if (registerCloseBtn) {
        registerCloseBtn.onclick = function() {
            registerModal.style.display = "none";
        }
    }
  
    if (kecelakaanCloseBtn) {
        kecelakaanCloseBtn.onclick = function() {
            kecelakaanModal.style.display = "none";
        }
    }
  
    window.onclick = function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
        if (event.target == kecelakaanModal) {
            kecelakaanModal.style.display = "none";
        }
    }
  }
  
  window.onload = setupModal;