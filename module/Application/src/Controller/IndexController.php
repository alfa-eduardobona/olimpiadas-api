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

        return new ViewModel();
    }
}
