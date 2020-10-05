<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
/**
 * 
 *  @author Lakitha Dias
 *  Our custom HeroConfigForm
 * 
 */


class HeroConfigForm extends ConfigFormBase{
    
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::getFormId()
     */
    public function getFormId()
    {
        return "module_hero_confighero";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::buildForm()
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = $this->config['module_hero.settings'];
        
        $form['hero_list_title'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Hero list title'),
            '#default_value' => $config->get('hero_list_title'),
        ];
        
        return parent::buildForm($form, $form_state);
    }
    
    /**
     * 
     * @return string[]
     */
    protected function getEditableConfigNames()
    {
        return [
            'module_hero.settings',
        ];
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\ConfigFormBase::submitForm()
     */
    public function submitForm(array &$form, FormStateInterface $form_state){
        $config = $this->configFactory->getEditable('module_hero.settings');
        $config
          ->set('hero_list_title', $form_state->getValue('hero_list_title'))
          -save();
        parent::submitForm($form, $form_state);
    }
}