let inputId = localStorage.getItem('inputId')

function askId() {
    inputId = prompt("insérer l'ID de l'annonce que vous souhaitez supprimer")
    document.getElementById("userInput").value
    localStorage.setItem('inputId', inputId)
    alert(inputId)
}
