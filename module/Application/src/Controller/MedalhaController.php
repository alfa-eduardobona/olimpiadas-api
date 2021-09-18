<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Entity\Atleta;
use Application\Repository\Atleta as AtletaRepository;
use Application\Pais;
use Doctrine\ORM\EntityManager;
use Laminas\Mvc\Controller\AbstractRestfulController;
use Laminas\View\Model\JsonModel;

class MedalhaController extends AbstractRestfulController
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function paisAction()
    {
        return new JsonModel([
            'nome' => 'Brasil'
        ]);
    }

    public function atletaAction()
    {
        /**
         * @var AtletaRepository $repository
         */
        $repository = $this->em->getRepository(Atleta::class);
//        dump( $repository->findAll());
//        dump($repository->find(1));

        $r = $repository->selectAtletasComMedalhas();
        dump($r);

        // criteria
//        dump($repository->findBy())

        return new JsonModel([

        ]);
    }
}
