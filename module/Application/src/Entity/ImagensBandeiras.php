<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\Bandeiras")
 * @ORM\Table(name="bandeiras")
 */
class ImagensBandeiras
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idBandeira", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idBandeira;

    /**
     * @ORM\Column(name="nomeBandeira", type="string", length=255)
     */
    public $nomeBandeira;

    /**
     * @ORM\Column(name="urlImagemBandeira", type="string", length=255)
     */
    public $urlImagemBandeira;

    /**
     * @return mixed
     */
    public function getIdBandeira()
    {
        return $this->idBandeira;
    }

    /** 
     * @param mixed
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
    public function getUrlImagemBandeira()
    {
        return $this->urlImagemBandeira;
    }

    /**
     * @param mixed $urlBandeira
     */
    public function setUrlImagemBandeira($urlImagemBandeira): void
    {
        $this->urlImagemBandeira = $urlImagemBandeira;
    }
}