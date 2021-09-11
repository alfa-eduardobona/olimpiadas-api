<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Pais;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;
use Laminas\View\Model\JsonModel;

class MedalhaController extends AbstractActionController
{
    public function paisAction()
    {
        echo 2; exit;

        return new JsonModel([
            'nome' => 'Brasil'
        ]);
    }

    public function atletaAction()
    {
        echo 3; exit;

        return new JsonModel();
    }
}
