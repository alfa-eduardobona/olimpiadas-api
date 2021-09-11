<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\PostRepository")
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
     * @ORM\Column(name="nomePais", type="string", length=100)
     */
    public $nomePais;

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
}
