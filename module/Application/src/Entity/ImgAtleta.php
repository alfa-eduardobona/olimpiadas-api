<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\ImgAtleta")
 * @ORM\Table(name="imgAtleta")
 */
class ImgAtleta
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idImgAtleta", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImgAtleta;

    /**
     * @ORM\Column(name="nomeImgAtleta", type="string", length=80)
     */
    public $nomeImgAtleta;

    /**
     * @ORM\Column(name="urlImgAtletas", type="string")
     */
    public $urlImgAtleta;

    /**
     * @return mixed
     */
    public function getIdImgAtleta()
    {
        return $this->idImgAtleta;
    }

    /**
     * @param mixed $idImgAtleta
     */
    public function setIdImgAtleta($idImgAtleta): void
    {
        $this->idImgAtleta = $idImgAtleta;
    }

    /**
     * @return mixed
     */
    public function getNomeImgAtleta()
    {
        return $this->nomeImgAtleta;
    }

    /**
     * @param mixed $nomeImgAtleta
     */
    public function setNomeImgAtleta($nomeImgAtleta): void
    {
        $this->nomeImgAtleta = $nomeImgAtleta;
    }

    /**
     * @return mixed
     */
    public function getUrlImgAtleta()
    {
        return $this->urlImgAtleta;
    }

    /**
     * @param mixed $urlImgAtleta
     */
    public function setUrlImgAtleta($urlImgAtleta): void
    {
        $this->urlImgAtleta = $urlImgAtleta;
    }
}
