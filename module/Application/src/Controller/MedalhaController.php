<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Entity\Atleta;
use Application\Entity\PageViews;
use Application\Repository\PageViews as PageviewsRepository;
use Application\Entity\Pais;
use Application\Repository\Pais as PaisRepository;
use Application\Repository\Atleta as AtletaRepository;
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
        /**
         * @var PageviewsRepository $repository
         */
        $repository = $this->em->getRepository(PageViews::class);
        $repository->registrarNovoAcesso('/medalhas/por-pais');

        /**
         * @var PaisRepository $repository
         */
        $repository = $this->em->getRepository(Pais::class);
        $paises = $repository->selectPaisesComMedalhas();
        return new JsonModel($paises);
    }

    public function atletaAction()
    {
        /**
         * @var PageviewsRepository $repository
         */
        $repository = $this->em->getRepository(PageViews::class);
        $repository->registrarNovoAcesso('/medalhas/por-atleta');

        /**
         * @var AtletaRepository $repository
         */
        $repository = $this->em->getRepository(Atleta::class);

        $atletas = $repository->selectAtletasComMedalhas();
        return new JsonModel($atletas);
    }
}