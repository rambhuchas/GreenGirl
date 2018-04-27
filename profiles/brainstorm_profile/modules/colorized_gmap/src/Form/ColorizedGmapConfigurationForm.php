<?php
namespace Drupal\colorized_gmap\Form;

use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;

/**
 * Defines a form that configures forms module settings.
 */
class ColorizedGmapConfigurationForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'colorized_gmap_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'colorized_gmap.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, Request $request = NULL) {
    $config = $this->config('colorized_gmap.settings');
    $url = Url::fromUri('https://developers.google.com/maps/documentation/javascript/get-api-key', array(
      'attributes' => array('target' => '_blank'),
      'absolute' => TRUE
    ));
    $link = Link::fromTextAndUrl($this->t('this'), $url)->toString();
    $form['colorized_gmap_api_key'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Google Places API Key'),
      '#default_value' => $config->get('colorized_gmap_api_key'),
      '#description' => $this->t('Please visit @get-key page to get API key. This module will not work without it.', array('@get-key' => $link)),
      '#required' => TRUE,
    );
    $form['#attached']['library'][] = 'colorized_gmap/colorized_gmap.colorpicker';
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('colorized_gmap.settings')
      ->set('colorized_gmap_api_key', $values['colorized_gmap_api_key'])
      ->save();
  }

}