const Index = (() => {

    const tableMedalCountry = async () => {
        const data = await axios.get('http://localhost:8080/medalhas/por-pais').then(({ data }) => data);
        console.log(data)
        const rows = await data.reduce(async (acc, data) => {
            const value = await acc;
            const option = `
            <tr>
                <td>
                    <img class="mr-2" src="${data.urlBandeira}" width="40" height="28">
                    ${data.nomePais}
                </td>
                <td>${data.nuOuro}</td>
                <td>${data.nuPrata}</td>
                <td>${data.nuBronze}</td>
                <td>${data.nuMedalhas}</td>
            </tr>`;

            return Promise.resolve((acc = value + option));
        }, Promise.resolve(null));

        $('#tableMedalCountry').find('tbody').append(rows);
    }


    const tableMedalAthlete = async () => {
        const data = await axios.get('http://localhost:8080/medalhas/por-atleta').then(({ data }) => data);

        const rows = await data.reduce(async (acc, data) => {
            const value = await acc;
            const option = `
            <tr>
                <td>
                    <img class="mr-2" src="${data.urlImagem}" width="40" height="28">
                    ${data.nomeAtleta}
                </td>
                <td>${data.nuOuro}</td>
                <td>${data.nuPrata}</td>
                <td>${data.nuBronze}</td>
                <td>${data.nuMedalhas}</td>
            </tr>`;

            return Promise.resolve((acc = value + option));
        }, Promise.resolve(null));

        $('#tableMedalAthlete').find('tbody').append(rows);
    }

    return {
        init: function () {
            tableMedalCountry();
            tableMedalAthlete();
        },
    };
})();
