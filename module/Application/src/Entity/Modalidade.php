<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TODO corrigir repository posteriormente
 * @ORM\Entity(repositoryClass="\Application\Repository\PostRepository")
 * @ORM\Table(name="modalidade")
 */
class Modalidade
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idModalidade", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idModalidade;

    /**
     * @ORM\Column(name="nomeModalidade", type="string", length=80)
     */
    public $nomeModalidade;

    /**
     * @return mixed
     */
    public function getIdModalidade()
    {
        return $this->idModalidade;
    }

    /**
     * @param mixed $idModalidade
     */
    public function setIdModalidade($idModalidade): void
    {
        $this->idModalidade = $idModalidade;
    }

    /**
     * @return mixed
     */
    public function getNomeModalidade()
    {
        return $this->nomeModalidade;
    }

    /**
     * @param mixed $nomeModalidade
     */
    public function setNomeModalidade($nomeModalidade): void
    {
        $this->nomeModalidade = $nomeModalidade;
    }
}