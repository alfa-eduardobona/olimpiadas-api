<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TODO corrigir repository posteriormente
 * @ORM\Entity(repositoryClass="\Application\Repository\Atleta")
 * @ORM\Table(name="atleta")
 */
class Atleta
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idAtleta", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idAtleta;

    /**
     * @ORM\Column(name="nomeAtleta", type="string", length=80)
     */
    public $nomeAtleta;

    /**
     * @ORM\Column(name="idImagemAtleta", type="integer")
     */
    public $idImagemAtleta;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\Pais", inversedBy="atletas")
     * @ORM\JoinColumn(name="idPais", referencedColumnName="idPais")
     */
    protected $pais;

    /**
     * @ORM\OneToOne(targetEntity="Application\Entity\Imagem", mappedBy="imagem")
     * @ORM\JoinColumn(name="idImagemAtleta", referencedColumnName="idImagem")
     */
    protected $imagemAtleta;

    /**
     * @return mixed
     */
    public function getIdAtleta()
    {
        return $this->idAtleta;
    }

    /**
     * @param mixed $idAtleta
     */
    public function setIdAtleta($idAtleta): void
    {
        $this->idAtleta = $idAtleta;
    }

    /**
     * @return mixed
     */
    public function getNomeAtleta()
    {
        return $this->nomeAtleta;
    }

    /**
     * @param mixed $nomeAtleta
     */
    public function setNomeAtleta($nomeAtleta): void
    {
        $this->nomeAtleta = $nomeAtleta;
    }

    /**
     * @return mixed
     */
    public function getIdImagemAtleta()
    {
        return $this->idImagemAtleta;
    }

    /**
     * @param mixed $idImagemAtleta
     */
    public function setIdImagemAtleta($idImagemAtleta): void
    {
        $this->idImagemAtleta = $idImagemAtleta;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais): void
    {
        $this->pais = $pais;
    }
}
