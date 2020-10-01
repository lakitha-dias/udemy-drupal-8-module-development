<?php

namespace Drupal\module_hero\Controller;

/****
 * @author : Lakitha Dias
 */


class HeroController
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
            '#type' => 'markup',
            '#markup' => '<ol>'.$ourHeroes.'</ol>'
        ];
    }
  
}

