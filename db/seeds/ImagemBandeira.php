<?php


use Phinx\Seed\AbstractSeed;

class ImagemBandeira extends AbstractSeed
{
    public function run()
    {
        $imagensBandeira = [
            [ "nomeImageBandeira" => "Barbados", "urlImageBandeira" => "https://a-static.mlcdn.com.br/618x463/bandeira-do-barbados-22x32cm-banderminas/wgilbandeiras/181/87a06b0e8196eff3c28bf08c868b9831.jpg" ],
            [ "nomeImageBandeira" => "Belarus" , "urlImageBandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Flag_of_Belarus.svg/255px-Flag_of_Belarus.svg.png" ],
            [ "nomeImageBandeira" => "Belgium" , "urlImageBandeira" => "https://www.publicdomainpictures.net/pictures/120000/velka/belgium-flag.jpg" ],
            [ "nomeImageBandeira" => "Belize"  , "urlImageBandeira" => "https://www.estudopratico.com.br/wp-content/uploads/2016/10/Significado-e-simbolismo-da-bandeira-do-Belize-1200x675.png" ],
            [ "nomeImageBandeira" => "Benin"   , "urlImageBandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Flag_of_Benin.svg/255px-Flag_of_Benin.svg.png" ],
            [ "nomeImageBandeira" => "Bermuda" , "urlImageBandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Flag_of_Bermuda.svg/255px-Flag_of_Bermuda.svg.png" ],
            [ "nomeImageBandeira" => "Bhutan"  , "urlImageBandeira" => "https://flagshub.com/images/flag-of-bhutan.png" ],
            [ "nomeImageBandeira" => "Bolivia" , "urlImageBandeira" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Flag_of_Bolivia_%28state%29.svg/1280px-Flag_of_Bolivia_%28state%29.svg.png" ],
            [ "nomeImageBandeira" => "Bosnia"  , "urlImageBandeira" => "https://www.estudopratico.com.br/wp-content/uploads/2016/10/significado-da-bandeira-da-bosnia-e-herzegovina%E2%80%8E.png" ],
            [ "nomeImageBandeira" => "Brazil"  , "urlImageBandeira" => "https://s1.static.brasilescola.uol.com.br/be/conteudo/images/2-bandeira-do-brasil.jpg" ]
        ];

        $this->insert("imagem_bandeira", $imagensBandeira);
    }
}
