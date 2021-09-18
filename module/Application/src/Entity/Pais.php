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
     * @ORM\OneToMany(targetEntity="\Application\Entity\Atleta", mappedBy="pais")
     * @ORM\JoinColumn(name="idAtleta", referencedColumnName="idAtleta")
     */
    protected $atletas;

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
}
