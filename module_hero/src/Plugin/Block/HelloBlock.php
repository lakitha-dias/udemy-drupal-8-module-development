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
        return [
            '#type' => 'markup',
            '#markup' => $this->t('The output of our superheros block'),
        ];
    }
}