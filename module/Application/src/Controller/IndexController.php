<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        // criar diagramação para 2 tabelas sendo
        // uma na esquerda com o quadro de medalhas por país
        // e outra na direita sendo o quadro de medalhas por atleta

        // ESTE CONTROLLER NÃO DEVE USAR REPOSITÓRIO
        // COMO VOU RESOLVER ENTÃO?
        // 1. a view (.phtml) faz uma consulta na API por javascript
        // 2. o controller (este php aqui) faz a consulta nele mesmo na URL
        // por meio de http request em localhost:8080/medalhas/por-pais
        // e envia para a view os dados do JSON
        //return new JsonModel(["teste"=>"renan"]);
        return new ViewModel(["paises" => $this->porPais(), "atletas" => $this->porAtleta()]);
    }

    private function porPais()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost/medalhas/por-pais",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"

        ));

        $paises = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return json_decode($paises);
    }

    private function porAtleta()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost/medalhas/por-atleta",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"

        ));

        $atletas = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return json_decode($atletas);
    }
}
