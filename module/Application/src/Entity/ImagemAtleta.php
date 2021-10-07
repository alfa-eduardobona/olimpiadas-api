<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\ImageAtleta")
 * @ORM\Table(name="imagem_atleta")
 */
class ImagemAtleta
{
    /**
     * @var int $idImageAtleta
     *
     * @ORM\Id
     * @ORM\Column(name="idImageAtleta", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImageAtleta;

    /**
     * @var string $nomeAtleta
     *
     * @ORM\Column(name="nomeImageAtleta", type="string", length="80")
     */
    public $nomeImageAtleta;

    /**
     * @var string $urlImageAtleta
     *
     * @ORM\Column(name="urlImageAtleta", type="string")
     */
    public $urlImageAtleta;

    /**
     * @return int
     */
    public function getIdImageAtleta(): int
    {
        return $this->idImageAtleta;
    }

    /**
     * @param int $idImageAtleta
     */
    public function setIdImageAtleta(int $idImageAtleta): void
    {
        $this->idImageAtleta = $idImageAtleta;
    }

    /**
     * @return string
     */
    public function getNomeImageAtleta(): string
    {
        return $this->nomeImageAtleta;
    }

    /**
     * @param string $nomeImageAtleta
     */
    public function setNomeImageAtleta(string $nomeImageAtleta): void
    {
        $this->nomeImageAtleta = $nomeImageAtleta;
    }

    /**
     * @return string
     */
    public function getUrlImageAtleta(): string
    {
        return $this->urlImageAtleta;
    }

    /**
     * @param string $urlImageAtleta
     */
    public function setUrlImageAtleta(string $urlImageAtleta): void
    {
        $this->urlImageAtleta = $urlImageAtleta;
    }
}