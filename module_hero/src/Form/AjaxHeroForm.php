<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;

/**
 * 
 *  @author Lakitha Dias
 *  Our custom AjaxHeroForm
 * 
 */


class AjaxHeroForm extends FormBase{
    
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::getFormId()
     */
    public function getFormId()
    {
        return "module_hero_ajaxheroform";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::buildForm()
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        
        $form['message'] = [
            '#type' => 'markup',
            '#markup' => '<div class="result_message"></div>'
        ];
        
        $form['rival_1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Rival one')
        ];
        
        $form['rival_2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Rival two')
        ];
        
        $form['submit'] = [
            '#type' => 'button',
            '#value' => $this->t('who will win'),
            '#ajax' => [
                'callback' => '::setMessage',
            ]
        ];
        
        return $form;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::submitForm()
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
    }
    
    
    /**
     * Our custom ajax response
     */
    public function setMessage(array &$form, FormStateInterface $form_state){
        $response = new AjaxResponse();
        $response->addCommand(
            new HtmlCommand(
                 '.result_message',
                 'The winner is'. $form_state->getValue('rival_'.$winner)
            )
        );
        
        return $response;
    }

}