<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\Bandeira")
 * @ORM\Table(name="imgBandeira")
 */
class ImgBandeira
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idImgBandeira", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImgBandeira;

    /**
     * @ORM\Column(name="nomeBandeira", type="string", length=80)
     */
    public $nomeBandeira;

    /**
     * @ORM\Column(name="urlBandeira", type="string")
     */
    public $urlBandeira;

    /**
     * @return mixed
     */
    public function getIdImgBandeira()
    {
        return $this->idImgBandeira;
    }

    /**
     * @param mixed $idImgBandeira
     */
    public function setIdImgBandeira($idImgBandeira): void
    {
        $this->idImgBandeira = $idImgBandeira;
    }

    /**
     * @return mixed
     */
    public function getNomeBandeira()
    {
        return $this->nomeBandeira;
    }

    /**
     * @param mixed $nomeBandeira
     */
    public function setNomeBandeira($nomeBandeira): void
    {
        $this->nomeBandeira = $nomeBandeira;
    }

    /**
     * @return mixed
     */
    public function getUrlBandeira()
    {
        return $this->urlBandeira;
    }

    /**
     * @param mixed $urlBandeira
     */
    public function setUrlBandeira($urlBandeira): void
    {
        $this->urlBandeira = $urlBandeira;
    }
}
