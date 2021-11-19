const tableByCountryLoad = () => {
    fetch('http://localhost:8080/medalhas/por-pais')
    .then(response => {
        response.json()
        .then(data => {
            const tableCountry = document.getElementById('tableMedalCountry');
            let rowsTable = '';
            data.forEach(item => {
                rowsTable += `
                    <tr>
                        <th scope="row">
                            <img class="mr-2" src=${item.urlImagem} width="50" height="40">
                            ${item.nomePais}
                        </th>
                        <td>${item.nuOuro}</td>
                        <td>${item.nuPrata}</td>
                        <td>${item.nuBronze}</td>
                        <td>${item.nuMedalhas}</td>
                    </tr>
                    `;
            });
            tableCountry.innerHTML = rowsTable;
        })
    })
}

const tableByAthleteLoad = () => {
    fetch('http://localhost:8080/medalhas/por-atleta')
        .then(response => {
            response.json()
                .then(data => {
                    const athleteCountry = document.getElementById('tableMedalAthlete');
                    let rowsTable = '';
                    data.forEach(item => {
                        rowsTable += `
                            <tr>
                                <th scope="row">
                                    <img class="mr-2" src=${item.urlImagem} width="50" height="40">
                                    ${item.nomeAtleta}
                                </th>
                                <td>${item.nuOuro}</td>
                                <td>${item.nuPrata}</td>
                                <td>${item.nuBronze}</td>
                                <td>${item.nuMedalhas}</td>
                            </tr>
                    `;
                    });
                    athleteCountry.innerHTML = rowsTable;
                })
        })
}

(() => {
    tableByCountryLoad()
    tableByAthleteLoad()
})()