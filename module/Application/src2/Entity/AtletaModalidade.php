<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TODO corrigir repository posteriormente
 * @ORM\Entity(repositoryClass="\Application\Repository\PostRepository")
 * @ORM\Table(name="atleta_modalidade")
 */
class AtletaModalidade
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idAtletaModalidade", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idAtletaModalidade;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\Atleta", inversedBy="atletas")
     * @ORM\JoinColumn(name="idAtleta", referencedColumnName="idAtleta")
     */
    protected $atleta;

    /**
     * @ORM\ManyToOne(targetEntity="Application\Entity\Modalidade", inversedBy="modalidades")
     * @ORM\JoinColumn(name="idModalidade", referencedColumnName="idModalidade")
     */
    protected $modalidade;

    /**
     * @ORM\Column(name="nuPosicao", type="integer")
     */
    protected $nuPosicao;

    /**
     * @return mixed
     */
    public function getIdAtletaModalidade()
    {
        return $this->idAtletaModalidade;
    }

    /**
     * @param mixed $idAtletaModalidade
     */
    public function setIdAtletaModalidade($idAtletaModalidade): void
    {
        $this->idAtletaModalidade = $idAtletaModalidade;
    }

    /**
     * @return mixed
     */
    public function getAtleta()
    {
        return $this->atleta;
    }

    /**
     * @param mixed $atleta
     */
    public function setAtleta($atleta): void
    {
        $this->atleta = $atleta;
    }

    /**
     * @return mixed
     */
    public function getModalidade()
    {
        return $this->modalidade;
    }

    /**
     * @param mixed $modalidade
     */
    public function setModalidade($modalidade): void
    {
        $this->modalidade = $modalidade;
    }

    /**
     * @return mixed
     */
    public function getNuPosicao()
    {
        return $this->nuPosicao;
    }

    /**
     * @param mixed $nuPosicao
     */
    public function setNuPosicao($nuPosicao): void
    {
        $this->nuPosicao = $nuPosicao;
    }
}
