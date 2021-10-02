<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\Imagens")
 * @ORM\Table(name="imagens")
 */
class ImagensAtletas
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idImagemAtleta", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImagemAtleta;

    /**
     * @ORM\Column(name="urlImagemAtleta", type="string", length=255)
     */
    public $urlImagemAtleta;

    /**
     * @return mixed
     */
    public function getIdImagemAtleta()
    {
        return $this->idImagemAtleta;
    }

    /**
     * @return mixed
     */
    public function getUrlImagemAtleta()
    {
        return $this->urlImagemAtleta;
    }

    /**
     * @param mixed $urlImagemAtleta
     */
    public function setUrlImagemAtleta($urlImagemAtleta): void
    {
        $this->urlImagemAtleta = $urlImagemAtleta;
    }
}