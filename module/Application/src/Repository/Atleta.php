<?php

namespace Application\Repository;

use Application\Entity\AtletaModalidade;
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
        $query = $this->createQueryBuilder('a');
        $query->select('a.nomeAtleta');
        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
        $query->where('at.nuPosicao <= 3');

        /**
         * select atleta.nomeAtleta, count(*) from atleta
         * inner join atleta_modalidade using (idAtleta)
         * where nuPosicao <= 3
         * group by idAtleta
         */
        $query = $this->createQueryBuilder('a');
        // TODO count(*) as nuMedalhas (adicionar no select)
        // TODO dica: tentar usar $query->expr()->(alguma coisa)
        $query->select('a.idAtleta, a.nomeAtleta');

        $query->innerJoin(AtletaModalidade::class, 'at', Join::WITH, 'a.idAtleta=at.atleta');
        $query->where('at.nuPosicao <= 3');
        $query->groupBy('a.idAtleta');

        dump($query->getQuery()->getSQL());
        exit;
    }

    /**
     * Docs Extras
     *
     *
     * //        $query->andWhere('...')
    //        $query->where(
    //            $query->expr()->andX(
    //                $query->expr()->lte('at.nuPosicao', 3)
    //            )
    //        );
     *
     *
     */

}
