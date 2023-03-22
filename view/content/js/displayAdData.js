fetch("data/location.json")
    .then(function(response){
        return response.json();
    })
    .then(function(locations){
        let placeholder = document.querySelector("#data-output");
        let out = "";
        for(let location of locations){
            out += `
	         <tr>
	            <td> <img src='${location.Image}'> </td>
	            <td>${location.Title}</td>
	            <td>${location.Habitation}</td>
	            <td>${location.Localisation}</td>
	            <td>${location.Pièces}</td>
	            <td>${location.Description}</td>
	         </tr>
	      `;
        }

        placeholder.innerHTML = out;
    });