<?php

namespace Application\Repository;

use Application\Entity\AtletaModalidade;
use Application\Entity\Imagens;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class Atleta extends EntityRepository
{
    public function selectAtletasComMedalhas()
    {
        // funciona com nome da coluna de forma implícita
        // $this->findByNomeAtleta('Rayssa Leal');

        /**
         * select atleta.nomeAtleta from atleta
         * inner join atleta_modalidade using (idAtleta)
         * where nuPosicao <= 3
         */
//        $query = $this->createQueryBuilder('a');
//        $query->select('a.nomeAtleta');
//        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
//        $query->where('at.nuPosicao <= 3');

        /**
         * select atleta.nomeAtleta, count(*) from atleta
         * inner join atleta_modalidade using (idAtleta)
         * where nuPosicao <= 3
         * group by idAtleta
         */
//        $query = $this->createQueryBuilder('a');
//        $query->select('a.idAtleta, a.nomeAtleta, count(a) as nuMedalhas');
//
//        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
//        $query->where('at.nuPosicao <= 3');
//        $query->groupBy('a.idAtleta');

        /**
         * select atleta.nomeAtleta, sum(case when nuPosicao = 1 then 1 else null end) as nuOuro, count(prata), count(bronze), count(total)
         * from atleta
         * inner join atleta_modalidade using (idAtleta)
         * where nuPosicao <= 3
         * group by idAtleta
         */
        $query = $this->createQueryBuilder('a');
        $sql = <<<SQL
            a.idAtleta, a.nomeAtleta, i.urlImagem,
            sum(case when at.nuPosicao = 1 then 1 else 0 end) as nuOuro,
            sum(case when at.nuPosicao = 2 then 1 else 0 end) as nuPrata,
            sum(case when at.nuPosicao = 3 then 1 else 0 end) as nuBronze,

            count(a) as nuMedalhas
SQL;
        $query->select($sql);

        $query->innerJoin(Imagens::class, 'i', Join::WITH, 'a.idImagem=i.idImagem');
        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
        $query->where('at.nuPosicao <= 3');
        $query->groupBy('a.idAtleta');

        // mostrando só atletas com pelo menos uma medalha de ouro
//        $query->having('nuOuro > 1');

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
