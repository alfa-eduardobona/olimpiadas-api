<?php


use Phinx\Seed\AbstractSeed;

class Modalidade extends AbstractSeed
{
    public function run()
    {
        $modalidade = [
            [ "nomeModalidade" => "Voley"],
            [ "nomeModalidade" => "Futebol" ],
            [ "nomeModalidade" => "Tenis de Mesa" ],
            [ "nomeModalidade" => "Natação"  ]
        ];

        $this->insert("modalidade", $modalidade);
    }
}
