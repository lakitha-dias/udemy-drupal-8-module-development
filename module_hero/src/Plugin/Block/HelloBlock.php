<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
*  Lakitha Dias
*  @Block(
*       id = "module_hero_hero",
*       admin_label = @Translation("Example Hero block")
*  )
*
**/

class HelloBlock extends BlockBase{
    
    /**
     * {@inheritdoc}
     */
    
    public function build(){
        
        
        $heroes = [
            ['hero_name' => 'Hulk','real_name' => 'david'],
            ['hero_name' => 'Thor' ,'real_name' => 'david'],
            ['hero_name' => 'Iron Man' , 'real_name' => 'david'],
            ['hero_name' => 'Luck Cage' , 'real_name' => 'david'],
            ['hero_name' => 'Black widow' , 'real_name' => 'david'],
            ['hero_name' => 'Daredevil' , 'real_name' => 'david'],
            ['hero_name' => 'Captain America' , 'real_name' => 'david'],
            ['hero_name' => 'Wolverine' , 'real_name' => 'david'],
        ];
        
        $table =  [
            '#type' => 'table',
            '#header' => [
                $this->t('real name')
            ]
        ];
        
        foreach($heroes as $hero){
            $table[] = [
                'hero_name' =>  [
                    '#type' => 'markup',
                    '#markup' => $hero['hero_name'],
                ],
                'real_name' => [
                    '#type' => 'markup',
                    '#markup' => $hero['real_name'],
                ],
            ];
        }
        
        return $table;
    }
}