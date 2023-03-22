fetch("location.json")//cannot find the file in another directory
    .then(response => response.json())
    .then(data => {
        // get the table element by id
        const table = document.getElementById("data-table");

        // create table headers
        const headers = Object.keys(data[0]);
        const headerRow = document.createElement("tr");
        headers.forEach(header => {
            const th = document.createElement("th");
            th.textContent = header;
            headerRow.appendChild(th);
        });
        table.appendChild(headerRow);

        // create table rows
        data.forEach(obj => {
            const tr = document.createElement("tr");
            headers.forEach(header => {
                const td = document.createElement("td");
                td.textContent = obj[header];
                tr.appendChild(td);
            });
            table.appendChild(tr);
        });
    })
    .catch(error => console.error(error));
