<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Pais;
use Laminas\Mvc\Controller\AbstractRestfulController;
use Laminas\View\Model\JsonModel;

class MedalhaController extends AbstractRestfulController
{
    public function paisAction()
    {
        return new JsonModel([
            'nome' => 'Brasil'
        ]);
    }

    public function atletaAction()
    {
        return new JsonModel([

        ]);
    }
}
