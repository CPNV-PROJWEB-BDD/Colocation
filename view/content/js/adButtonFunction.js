let inputId = localStorage.getItem('userInputID')
let inputElement = localStorage.getItem('userInputElement')

//this function will search in the location.json file the specified array by its id
function findObjectById(inputId) {
    fetch('data/location.json')
    .then(response =>{
        if (!response.ok) {
            throw new Error("HTTP error " + response.status)
        }
        return response.json()
    })
    .then(data =>{
        return data.find(data => data.id === inputId);
    })
    
}

function askId() {
    inputId = prompt("insérer l'ID de l'annonce que vous souhaitez supprimer ou modifier")
    document.getElementById("userInput").value
    localStorage.setItem('userInput', userInputID)
     if (document.getElementById('delete-ad').onclick == true){
        deleteAdArray(inputId);
    }
    else{
        findObjectById(inputId);
    }
}

//function de delete the ad object by user inputing the id
function deleteAdArray(inputId){
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

//for the ad modification the functions will open the ad creation form
//insert the array data of the inputed id
//let the user modify the ad then delete the ad and create the modified ad as a new ad

// function to append object properties to an HTML form
function appendObjectToForm(data) {
    findObjectById(inputId);
    window.open("view/adCreationForm.php");
    const form = document.querySelector('adCreationForm');
    form.querySelector('Title').value = data.Title;
    form.querySelector('Image').value = data.Image;
    form.querySelector('Habitation').value = data.Habitation;
    form.querySelector('Localisation').value = data.Localisation;
    form.querySelector('Pieces').value = data.Pieces;
    form.querySelector('Description').value = data.Description;
    form.querySelector('Adresse').value = data.Adresse;
    deleteAdObject(inputId);
}
