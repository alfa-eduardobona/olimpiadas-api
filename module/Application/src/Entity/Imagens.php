<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="\Application\Repository\Imagens")
 * @ORM\Table(name="imagens")
 */
class Imagens
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idImagem", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImagem;

    /**
     * @ORM\Column(name="urlImagem", type="text")
     */
    public $urlImagem;

    /**
     * @return mixed
     */
    public function getIdImagem()
    {
        return $this->idImagem;
    }


    /**
     * @return mixed
     */
    public function getUrlImagem()
    {
        return $this->urlImagem;
    }

    /**
     * @param mixed $urlImagem
     */
    public function setUrlImagem($urlImagem): void
    {
        $this->urlImagem = $urlImagem;
    }
}