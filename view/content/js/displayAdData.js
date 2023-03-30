fetch('data/location.json')
    .then(response => {
        if (!response.ok) {
            throw new Error("HTTP error " + response.status)
        }
        return response.json()
    })
    .then(data => {
        // get the table element by id
        const table = document.getElementById("data-table")

        // create table headers
        const headers = Object.keys(data[0])
        const headerRow = document.createElement("tr")
        headers.forEach(header => {
            const th = document.createElement("th")
            th.textContent = header
            headerRow.appendChild(th)
        });
        table.appendChild(headerRow)
        
        // create table rows
        data.forEach(obj => {
            const tr = document.createElement("tr")
            headers.forEach(header => {
                const td = document.createElement("td")
                td.textContent = obj[header]
                tr.appendChild(td)
            })
            table.appendChild(tr)
            
        })
    })
    
    .catch(error => console.error(error))

    //bug when page refresh the page will resend the form in the json file