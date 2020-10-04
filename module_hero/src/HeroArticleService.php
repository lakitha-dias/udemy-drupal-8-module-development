<?php

namespace Drupal\module_hero;
use Drupal\Core\Entity\Query\QueryFactory; 
use Drupal\Core\Entity\EntityManager;

/**
 * 
 * @author Lakitha Dias
 *
 */

class HeroArticleService {
    
    private $entityQuery;
    private $entityManager;
    
    public function __construct(QueryFactory $queryFactory, EntityManager $entityManager){
        $this->queryFactory = $queryFactory;
        $this->entityManager =  $entityManager;
    }
    
    /**
     * Method for getting articles
     */
    public function getHeroArticles(){
        
        $articles = ['hulk is green', 'Flash is red'];
        
        $articleNids = $this->entityQuery->get('node')->condition('type','article')->execute();
        
        kint($this->entityManager->getStorage('node')->loadMultiple());
        
        return $articles;
    }
}