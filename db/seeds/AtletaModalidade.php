<?php


use Faker\Factory;
use Phinx\Seed\AbstractSeed;

class AtletaModalidade extends AbstractSeed
{
    private const QTD = 20;
    private const ID_MAX_ATLETA = 10;
    private const ID_MAX_MODALIDADE = 4;
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
            "Modalidade",
            "Atleta"
        ];
    }

    public function run()
    {
        $atletasModalidades = $this->addAtletaModalidade();
        $this->insert("atleta_modalidade", $atletasModalidades);
    }

    public function addAtletaModalidade(array $atletasModalidades = []): array
    {
        $atletaModalidade = [
            "nuPosicao" => $this->faker->numberBetween(1, 3),
            "idAtleta" => $this->faker->numberBetween(1, self::ID_MAX_ATLETA),
            "idModalidade" => $this->faker->numberBetween(1, self::ID_MAX_MODALIDADE)
        ];

        array_push($atletasModalidades, $atletaModalidade);

        if(count($atletasModalidades) < self::QTD) {
            return $this->addAtletaModalidade($atletasModalidades);
        }

        return $atletasModalidades;
    }
}
