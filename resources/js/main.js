

document.getElementById("openModal").addEventListener("click", function(e) {
    e.preventDefault();
    var url = this.getAttribute("data-url");
    
    // Effettua una richiesta AJAX per ottenere il contenuto della pagina di registrazione
    fetch(url)
        .then(response => response.text())
        .then(data => {
        // Inserisci il contenuto nella finestra modale
        document.getElementById("myModal").innerHTML = data;
        document.getElementById("myModal").style.display = "block";
        });
});

document.addEventListener("DOMContentLoaded", function() {
    // Aggiungi un gestore di eventi al clic sul pulsante "Indietro"
    document.getElementById("backButton").addEventListener("click", function() {
        // Chiudi la modale impostando il display su "none"
        document.getElementById("myModal").style.display = "none";
    });
});



