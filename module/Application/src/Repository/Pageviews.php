<?php

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use Application\Entity\PageViews as PageviewsEntity;

class Pageviews extends EntityRepository
{
    public function registrarNovoAcesso($url)
    {
        $pageview = new PageviewsEntity();
        $pageview->setDataAcesso(new \DateTime());
        $pageview->setUrl($url);

        $this->getEntityManager()->persist($pageview);
        $this->getEntityManager()->flush();

        return $pageview;
    }

    public function atualizarAcesso($id, $url)
    {
        $pageview = $this->find($id);
        if (!$pageview instanceof PageViewsEntity) {
            throw new \Exception('Objeto não encontrado', 2001);
        }
        $pageview->setUrl($url);
        $this->getEntityManager()->persist($pageview);
        $this->getEntityManager()->flush();

        return $pageview;
    }

    public function removerAcessosAntigos()
    {
        $pageviews = $this->findAll();
        $pageview = $pageviews[0];

        $this->getEntityManager()->remove($pageview);
        $this->getEntityManager()->flush();

        return true;
    }
}
