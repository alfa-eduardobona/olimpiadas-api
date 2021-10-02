<?php

namespace Application\Repository;

use Application\Entity\AtletaModalidade;
use Application\Entity\Atleta;
use Application\Entity\ImagensBandeiras;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class Pais extends EntityRepository
{
    public function selectPaisesComMedalhas()
    {
        $query = $this->createQueryBuilder('p');
        $sql = <<<SQL
            p.idPais, p.nomePais, ib.urlImagemBandeira,
            sum(case when at.nuPosicao = 1 then 1 else 0 end) as nuOuro,
            sum(case when at.nuPosicao = 2 then 1 else 0 end) as nuPrata,
            sum(case when at.nuPosicao = 3 then 1 else 0 end) as nuBronze,
            count(a) as nuMedalhas
SQL;
        $query->select($sql);

        $query->innerJoin(Atleta::class, 'a', Join::WITH, 'p.idPais=a.pais');
        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
        $query->innerJoin(ImagensBandeiras::class, 'ib', Join::WITH, 'p.idBandeira=ib.idBandeira');
        $query->where('at.nuPosicao <= 3');
        $query->groupBy('p.idPais');

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