<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/****
 * @author : Lakitha Dias
 */


class HeroController extends ControllerBase
{
    
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

