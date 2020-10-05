<?php

namespace Drupal\module_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * 
 *  @author Lakitha Dias
 *  Our custom ExampleForm
 * 
 */


class ExampleForm extends FormBase{
    
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::getFormId()
     */
    public function getFormId()
    {
        return "module_hero_exampleform";
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::buildForm()
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['text'] = array(
            '#type' => 'textarea',
            '#title' => $this
            ->t('Text'),
        );
        
        return $form;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Drupal\Core\Form\FormInterface::submitForm()
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        drupal_set_message('submitting out form...');
    }

}