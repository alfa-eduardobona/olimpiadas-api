<?php

namespace Application\Repository;

use Application\Entity\AtletaModalidade;
use Application\Entity\ImagensAtletas;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class Atleta extends EntityRepository
{
    public function selectAtletasComMedalhas()
    {
        $query = $this->createQueryBuilder('a');
        $sql = <<<SQL
            a.idAtleta, a.nomeAtleta, ia.urlImagemAtleta,
            sum(case when at.nuPosicao = 1 then 1 else 0 end) as nuOuro,
            sum(case when at.nuPosicao = 2 then 1 else 0 end) as nuPrata,
            sum(case when at.nuPosicao = 3 then 1 else 0 end) as nuBronze,
            count(a) as nuMedalhas
SQL;
        $query->select($sql);

        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
        $query->innerJoin(ImagensAtletas::class, 'ia', Join::WITH, 'a.idImagemAtleta=ia.idImagemAtleta');
        $query->where('at.nuPosicao <= 3');
        $query->groupBy('a.idAtleta');

        $query->orderBy('nuOuro', 'DESC');
        $query->addOrderBy('nuPrata', 'DESC');
        $query->addOrderBy('nuBronze', 'DESC');
        $query->addOrderBy('nuMedalhas', 'DESC');

        $results = $query->getQuery()->getResult();
        $results = array_map(function($atleta){
            $atleta['nuOuro'] = (int) $atleta['nuOuro'];
            $atleta['nuPrata'] = (int) $atleta['nuPrata'];
            $atleta['nuBronze'] = (int) $atleta['nuBronze'];

            return $atleta;
        }, $results);

        return $results;
    }
}