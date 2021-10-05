<?php

use Faker\Generator;
use Faker\Factory;
use Phinx\Seed\AbstractSeed;

class Atleta extends AbstractSeed
{
    private const QTD_ATLETAS = 10;
    private const LANGUAGE = 'pt_BR';

    /**
     * @var Generator
     */
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create(self::LANGUAGE);
        parent::__construct();
    }


    public function getDependencies()
    {
        return [
            "Pais",
            "ImagemAtleta"
        ];
    }

    public function run()
    {
        $atletas = $this->addFakePersonInArray();
        $this->insert("atleta", $atletas);
    }

    private function addFakePersonInArray(array $atletas = []): array
    {
        $atleta = [
            "nomeAtleta" => $this->faker->firstName(),
            "idPais" => $this->faker->numberBetween(1, 10),
            "idImageAtleta" => count($atletas) + 1
        ];

        $atletas[] = $atleta;

        if(count($atletas) < self::QTD_ATLETAS) {
            return $this->addFakePersonInArray($atletas);
        }

        return $atletas;
    }
}
