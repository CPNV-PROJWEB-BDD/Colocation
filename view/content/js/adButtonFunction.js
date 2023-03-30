//import data from '../data/location.json' assert { type: 'JSON' };
let inputId = localStorage.getItem('userInputID')

function askId() {
    inputId = prompt("insérer l'ID de l'annonce que vous souhaitez supprimer ou modifier")
    document.getElementById("userInput").value
    localStorage.setItem('userInput', userInputID)
     if (document.getElementById('delete-ad').onclick == true){
        deleteAdArray()
    }
    else{
        modifyAdElements()
    }
}

// https://www.tutorialspoint.com/search-by-id-and-remove-object-from-json-array-in-javascript
//not tested yet
function deleteAdObject(inputId){
    fetch('data/location.json')     //cannot find the file in another directory
    .then(response =>{
        if (!response.ok) {
            throw new Error("HTTP error " + response.status)
        }
        return response.json()
    })
    .then(data => {
        const removeById = (data, Id) => {
            const requiredIndex = data.findIndex(el => {
               return el.Id === String(Id)
            })
            if(requiredIndex === -1){
               return false;
            }
            return !!data.splice(requiredIndex, 1)
        }
        removeById(data, inputId)
    })
    console.log(data)
}

function modifyAdElements(inputId){
    fetch('data/location.json')
    .then(response => {
        if (!response.ok) {
            throw new Error("HTTP error " + response.status)
        }
        return response.json()
    })
    .then(data => {

    })
}
