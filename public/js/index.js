var httpRequest;

const tbAtleta = document.querySelector(".tb-atleta");
const tbPais = document.querySelector(".tb-pais");

window.onload = function () {
  if (window.XMLHttpRequest) {
    httpRequest = new XMLHttpRequest();
  } else if (window.ActiveXObject) {
    try {
      httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {}
    }
  }

  if (!httpRequest) {
    alert("Giving up :( Cannot create an XMLHTTP instance");
    return false;
  }

  httpRequest.onreadystatechange = getPais;
  httpRequest.open("GET", "http://localhost:8080/medalhas/por-pais");
  httpRequest.send();

  function getPais() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
        const response = JSON.parse(httpRequest.responseText);

        response.map(
          (pais, index) =>
            (tbPais.innerHTML += `
                    <tr style="max-height: 50px;">
                      <th scope="row">${index + 1}</th>
                      <td style="white-space: nowrap"> 
                        <img class="mr-2 border border-5" src="${
                          pais.urlBandeira
                        }" width="50" height="40">
                        ${pais.nomePais}
                      </td>
                      <td>${pais.nuOuro}</td>
                      <td>${pais.nuPrata}</td>
                      <td>${pais.nuBronze}</td>
                      <td>${pais.nuMedalhas}</td>
                    </tr>
                  `)
        );
      } else {
        alert("Erro na requisição!");
      }

      httpRequest.onreadystatechange = getAtleta;
      httpRequest.open("GET", "http://localhost:8080/medalhas/por-atleta");
      httpRequest.send();
    }
  }

  function getAtleta() {
    if (httpRequest.readyState === 4) {
      if (httpRequest.status === 200) {
        const response = JSON.parse(httpRequest.responseText);

        response.map(
          (atleta, index) =>
            (tbAtleta.innerHTML += `
                    <tr style="max-height: 50px;">
                      <th>${index + 1}</th>
                      <td style="white-space: nowrap"> 
                        <img class="mr-2 rounded-circle border border-white" src="${
                          atleta.urlImgAtleta
                        }" width="50" height="40">
                        ${atleta.nomeAtleta}
                      </td>
                      <td >${atleta.nuOuro}</td>
                      <td>${atleta.nuPrata}</td>
                      <td>${atleta.nuBronze}</td>
                      <td>${atleta.nuMedalhas}</td>
                    </tr>
                  `)
        );
      } else {
        alert("Erro na requisição!");
      }
    }
  }
};
