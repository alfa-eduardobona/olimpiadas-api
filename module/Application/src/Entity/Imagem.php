<?php

declare(strict_types=1);

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TODO corrigir repository posteriormente
 * @ORM\Entity(repositoryClass="\Application\Repository\PostRepository")
 * @ORM\Table(name="imagem")
 */
class Imagem
{
    /**
     * @ORM\Id
     * @ORM\Column(name="idImagem", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $idImagem;

    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    public $url;

    /**
     * @return mixed
     */
    public function getIdImagem()
    {
        return $this->idImagem;
    }

    /**
     * @param mixed $idImagem
     */
    public function setIdImagem($idImagem): void
    {
        $this->idImagem = $idImagem;
    }
}
