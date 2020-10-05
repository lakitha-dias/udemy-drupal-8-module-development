<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\module_hero\HeroArticleService;
use Drupal\Core\Config\ConfigFactory;

/****
 * @author : Lakitha Dias
 */


class HeroController extends ControllerBase
{
    
    private $articleHeroService;
    protected $configFactory;
    
    public static function create(ContainerInterface $container){
        return new static(
               $container->get('module_hero.hero_articles'),
               $container->get('config.factory')
            );
    }
    
    public function __construct(HeroArticleService $articleHeroService, ConfigFactory $configFactory){
        $this->articleHeroService = $articleHeroService;
        $this->configFactory = $configFactory;
    }
    
    public function heroList(){
        
        $heroes = [
            ['name' => 'Hulk'],
            ['name' => 'Thor'],
            ['name' => 'Iron Man'],
            ['name' => 'Luck Cage'],
            ['name' => 'Black widow'],
            ['name' => 'Daredevil'],
            ['name' => 'Captain America'],
            ['name' => 'Wolverine'],
        ];
        
        $ourHeroes = '';
        foreach($heroes as $hero){
            $ourHeroes .= '<li>'.$hero['name'].'</li>';
        }
        
        return [
            '#theme' => 'hero_list',
            '#items' => $heroes,
            '#title' => $this->t('Our wonderful heroes list..')
        ];
    }
  
}

