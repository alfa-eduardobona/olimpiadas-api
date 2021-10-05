<?php


use Phinx\Seed\AbstractSeed;

class ImagemAtleta extends AbstractSeed
{
    public function run()
    {
        $imagensAtletas = [
            ["nomeImageAtleta" => "1" , "urlImageAtleta" => "https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTq_zfUCElmICNU4kp8UeUE4vrIl9ZAJWB746opInmt-DqnKUw4aSPxybUiPGsxyDHemfPYNs9IJecdu-_JmXumNpZpkw"],
            ["nomeImageAtleta" => "2" , "urlImageAtleta" => "https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcQkUlwQpnnCzpDU3mRv4tZ4ZEpfne7IL1xAjFFDKnQU0or60WQTsYAgkBxIXN9yNvx-2tTfTXiJg9g2HMpQEcJdkRs3aQ"],
            ["nomeImageAtleta" => "3", "urlImageAtleta" => "https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTd6a0omrBanzmhSAdGdu2TWGpB_JB_NaNCiLxVbBrWfbYrCPWi7HXqm75XcCoNykn-KCDuwAeK6szwgpZsPhzYEi0ULQ"],
            ["nomeImageAtleta" => "4" , "urlImageAtleta" => "https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcSgto9Gl1KeMR5zqhhAo231Eo2n-UT7I_Tw7sYTXtws3GgNhgVLUaYb3c0cxDMvgl78wZP3rg2YmaTdDhS2O364tiEmNw"],
            ["nomeImageAtleta" => "5" , "urlImageAtleta" => "https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcTEetA5mlwMLJz6T-9sC48bBQ7IQRfADxlwuB41mYnrBdt-uNeqzgW1pXva1LcQc8BgRS_ChGPmrdqxOWFclCOESZcl5w"],
            ["nomeImageAtleta" => "6" , "urlImageAtleta" => "https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcSA_h7fgSf4vwEuzzgO0CKEFNAWja9H755Yhk2-SyfyJFkADyiCkpxR2DM7fACDNAsNtw3NfB90RnKgAGay44ARPSKMVw"],
            ["nomeImageAtleta" => "7" , "urlImageAtleta" => "https://encrypted-tbn3.gstatic.com/licensed-image?q=tbn:ANd9GcQFTu2GK5AhWY6ZpJouCt6dzS1m35lvRuGY4gVPDGY_HWdULxtteNlRCEGYS4GpYSAlHRm6G4kK8AyhATrfqOc-rIGyCg"],
            ["nomeImageAtleta" => "8" , "urlImageAtleta" => "https://encrypted-tbn2.gstatic.com/licensed-image?q=tbn:ANd9GcTCJLjF2STiKLKMsrTGP3ckwBVtfsbO3UA6541XTnANJ_J6ioURRr--UneAKiYT-7XBM7K4jvyDL648GcVAgGCmmkoj7A"],
            ["nomeImageAtleta" => "9" , "urlImageAtleta" => "https://encrypted-tbn1.gstatic.com/licensed-image?q=tbn:ANd9GcSt1g_30YtWux5jVq0BAZBRVyMSUI8AfMzhaAUDUlUyVQQOIZFgbU8Iog9kn2MKOyCEVbwRyiiX8dvPw8YCSUyyK4ITdw"],
            ["nomeImageAtleta" => "10" , "urlImageAtleta" => "https://encrypted-tbn0.gstatic.com/licensed-image?q=tbn:ANd9GcTk6uLetk3iQe3FBijC8DYbkJS8AqdeNlX9dx52RaA7H4eq3gzLK2AgwfiddT7slw7BHugX-jdmcak8TKgsorkBC4bNtA"],
        ];

        $this->insert("imagem_atleta", $imagensAtletas);
    }
}
