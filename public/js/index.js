async function load() {
	await axios.get('http://localhost:8080/medalhas/por-pais')
		.then(response => {
			response.data.map(item => {
				$('#medalhas-por-pais').append(`
					<tr>
						<th scope="row">
						<img class="mr-2" src=${item.url} width="50" height="40">
							${item.nomePais}
						</th>
						<td>${item.nuOuro}</td>
						<td>${item.nuPrata}</td>
						<td>${item.nuBronze}</td>
						<td>${item.nuMedalhas}</td>
					</tr>
				`)
			})
		})
		.catch(error => {
			console.log(error)
			alert('Erro ao buscar medalhas por país!')
		})

	await axios.get('http://localhost:8080/medalhas/por-atleta')
		.then(response => {
			response.data.map(item => {
				$('#medalhas-por-atleta').append(`
			  <tr>
					<th scope="row">
						<img class="mr-2" src=${item.url} width="50" height="40">
						${item.nomeAtleta}
					</th>
					<td>${item.nuOuro}</td>
					<td>${item.nuPrata}</td>
					<td>${item.nuBronze}</td>
					<td>${item.nuMedalhas}</td>
				</tr>
			`)
			})
		})
		.catch(error => {
			console.log(error)
			alert('Erro ao buscar medalhas por atleta!')
		})
}

(async () => {
	await load()
})()