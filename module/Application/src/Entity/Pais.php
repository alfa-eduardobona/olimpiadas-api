<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TODO corrigir repository posteriormente
 * @ORM\Entity(repositoryClass="\Application\Repository\Pais")
 * @ORM\Table(name="pais")
 */
class Pais
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idPais", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idPais;

    /**
     * @ORM\Column(name="nomePais", type="string", length=80)
     */
    public $nomePais;

    /**
     * @ORM\Column(name="nomePaisGlobal", type="string", length=80)
     */
    public $nomePaisGlobal;

    /**
     * @ORM\Column(name="idImagemBandeira", type="integer")
     */
    public $idImagemBandeira;

    /**
     * @ORM\OneToMany(targetEntity="\Application\Entity\Atleta", mappedBy="pais")
     * @ORM\JoinColumn(name="idAtleta", referencedColumnName="idAtleta")
     */
    protected $atletas;

    /**
     * @ORM\OneToOne(targetEntity="Application\Entity\Imagem", mappedBy="imagem")
     * @ORM\JoinColumn(name="idImagemBandeira", referencedColumnName="idImagem")
     */
    protected $imagemBandeira;

    /**
     * @return mixed
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * @param mixed $idPais
     */
    public function setIdPais($idPais): void
    {
        $this->idPais = $idPais;
    }

    /**
     * @return mixed
     */
    public function getNomePais()
    {
        return $this->nomePais;
    }

    /**
     * @param mixed $nomePais
     */
    public function setNomePais($nomePais): void
    {
        $this->nomePais = $nomePais;
    }

    /**
     * @return mixed
     */
    public function getNomePaisGlobal()
    {
        return $this->nomePaisGlobal;
    }

    /**
     * @param mixed $nomePaisGlobal
     */
    public function setNomePaisGlobal($nomePaisGlobal): void
    {
        $this->nomePaisGlobal = $nomePaisGlobal;
    }

    /**
     * @return mixed
     */
    public function getIdImagemBandeira()
    {
        return $this->idImagemBandeira;
    }

    /**
     * @param mixed $idImagemBandeira
     */
    public function setIdImagemBandeira($idImagemBandeira): void
    {
        $this->idImagemBandeira = $idImagemBandeira;
    }
}
