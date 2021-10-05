<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\ImageBandeira")
 * @ORM\Table(name="imagem_bandeira")
 */
class ImagemBandeira
{
    /**
     * @var int $idImageBandeira
     *
     * @ORM\Id
     * @ORM\Column(name="idImageBandeira", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImageBandeira;

    /**
     * @var string $nomeImageBandeira
     *
     * @ORM\Column(name="nomeImageBandeira", type="string", length="80")
     */
    public $nomeImageBandeira;

    /**
     * @var string $urlImageBandeira
     *
     * @ORM\Column(name="urlImageBandeira", type="string")
     */
    public $urlImageBandeira;

    /**
     * @return int
     */
    public function getIdImageBandeira(): int
    {
        return $this->idImageBandeira;
    }

    /**
     * @param int $idImageBandeira
     */
    public function setIdImageBandeira(int $idImageBandeira): void
    {
        $this->idImageBandeira = $idImageBandeira;
    }

    /**
     * @return string
     */
    public function getNomeImageBandeira(): string
    {
        return $this->nomeImageBandeira;
    }

    /**
     * @param string $nomeImageBandeira
     */
    public function setNomeImageBandeira(string $nomeImageBandeira): void
    {
        $this->nomeImageBandeira = $nomeImageBandeira;
    }

    /**
     * @return string
     */
    public function getUrlImageBandeira(): string
    {
        return $this->urlImageBandeira;
    }

    /**
     * @param string $urlImageBandeira
     */
    public function setUrlImageBandeira(string $urlImageBandeira): void
    {
        $this->urlImageBandeira = $urlImageBandeira;
    }
}