<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\Pageviews")
 * @ORM\Table(name="pageviews")
 */
class PageViews
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idPageview", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idPageview;

    /**
     * @ORM\Column(name="dataAcesso", type="datetime")
     */
    public $dataAcesso;

    /**
     * @ORM\Column(name="url", type="string")
     */
    public $url;

    /**
     * @return mixed
     */
    public function getIdPageview()
    {
        return $this->idPageview;
    }

    /**
     * @param mixed $idPageview
     */
    public function setIdPageview($idPageview): void
    {
        $this->idPageview = $idPageview;
    }

    /**
     * @return mixed
     */
    public function getDataAcesso()
    {
        return $this->dataAcesso;
    }

    /**
     * @param mixed $dataAcesso
     */
    public function setDataAcesso($dataAcesso): void
    {
        $this->dataAcesso = $dataAcesso;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }
}
