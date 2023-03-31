let inputId = localStorage.getItem('userInputID')
let inputElement = localStorage.getItem('userInputElement')

function findObjectById(inputId) {
    fetch('data/location.json')
    .then(response =>{
        if (!response.ok) {
            throw new Error("HTTP error " + response.status)
        }
        return response.json()
    })
    .then(data =>{
        return data.find(obj => obj.id === inputId);
    })
    
}

function askId() {
    inputId = prompt("insérer l'ID de l'annonce que vous souhaitez supprimer ou modifier")
    document.getElementById("userInput").value
    localStorage.setItem('userInput', userInputID)
     if (document.getElementById('delete-ad').onclick == true){
        deleteAdArray()
    }
    else{
        inputElement = prompt("insérer quel élément que vous souhaitez modifier")
        document.getElementById("userInputElement")
        inputModifyData = prompt
        modifyAdElements()
    }
}

// https://www.tutorialspoint.com/search-by-id-and-remove-object-from-json-array-in-javascript
//not tested yet
function deleteAdObject(inputId){
    fetch('data/location.json')
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

// function to append object properties to an HTML form
function appendObjectToForm(obj) {
    const form = document.querySelector('adCreationForm');
    form.querySelector('Title').value = obj.Title;
    form.querySelector('Image').value = obj.Image;
    form.querySelector('Habitation').value = obj.Habitation;
    form.querySelector('Localisation').value = obj.Localisation;
    form.querySelector('Pieces').value = obj.Pieces;
    form.querySelector('Description').value = obj.Description;
    form.querySelector('Adresse').value = obj.Adresse;
}
