<?php


use Phinx\Seed\AbstractSeed;

class Pais extends AbstractSeed
{
    public function getDependencies()
    {
        return [
            "ImagemBandeira"
        ];
    }

    public function run()
    {
        $paises = [
            [ "nomePais" => "Barbados", "nomePaisGlobal" => "BRB" , "idImageBandeira" => 1 ],
            [ "nomePais" => "Belarus" , "nomePaisGlobal" => "BLR" , "idImageBandeira" => 2 ],
            [ "nomePais" => "Belgium" , "nomePaisGlobal" => "BEL" , "idImageBandeira" => 3 ],
            [ "nomePais" => "Belize"  , "nomePaisGlobal" => "BLZ" , "idImageBandeira" => 4 ],
            [ "nomePais" => "Benin"   , "nomePaisGlobal" => "BEN" , "idImageBandeira" => 5 ],
            [ "nomePais" => "Bermuda" , "nomePaisGlobal" => "BMU" , "idImageBandeira" => 6 ],
            [ "nomePais" => "Bhutan"  , "nomePaisGlobal" => "BTN" , "idImageBandeira" => 7 ],
            [ "nomePais" => "Bolivia" , "nomePaisGlobal" => "BOL" , "idImageBandeira" => 8 ],
            [ "nomePais" => "Bosnia"  , "nomePaisGlobal" => "BIH" , "idImageBandeira" => 9 ],
            [ "nomePais" => "Brazil"  , "nomePaisGlobal" => "BRA" , "idImageBandeira" => 10]
        ];

        $this->insert("pais", $paises);
    }
}
