<?php

/**
 * @file
 * Contains \Drupal\copyprevention\Form\CopypreventionSettingsForm.
 */

namespace Drupal\copyprevention\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element;

class CopypreventionSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'copyprevention_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['copyprevention.settings'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = [];
    $form['copyprevention_body'] = [
      '#type' => 'checkboxes',
      '#title' => t('Body tag attributes'),
      '#description' => t('Apply these attributes to body tag.'),
      '#options' => [
        'selectstart' => t('Disable text selection: onselectstart="return false;"'),
        'copy' => t('Disable copy to clipboard: oncopy="return false;"'),
        'contextmenu' => t('Disable right-click context menu: oncontextmenu="return false;"'),
      ],
      '#default_value' => \Drupal::configFactory()->getEditable('copyprevention.settings')->get('copyprevention_body'),
    ];
    $form['images'] = [
      '#type' => 'details',
      '#title' => t('Images protection'),
      '#open' => TRUE
    ];

    $form['images']['copyprevention_images'] = [
      '#type' => 'checkboxes',
      '#description' => t('Apply these methods to images.'),
      '#options' => [
        'contextmenu' => t('Disable right-click context menu on images: oncontextmenu="return false;"'),
        'transparentgif' => t('Place transparent gif image above all images'),
      ],
      '#default_value' => \Drupal::configFactory()->getEditable('copyprevention.settings')->get('copyprevention_images'),
    ];
    $form['images']['copyprevention_images_min_dimension'] = [
      '#type' => 'select',
      '#title' => t('Minimal image dimension'),
      '#description' => t('Minimal image height or width to activate Copy Prevention.'),
      '#options' => [
        10 => 10,
        20 => 20,
        30 => 30,
        50 => 50,
        100 => 100,
        150 => 150,
        200 => 200,
        300 => 300,
        500 => 500,
      ],
      '#default_value' => \Drupal::configFactory()->getEditable('copyprevention.settings')->get('copyprevention_images_min_dimension'),
    ];

    $form['copyprevention_images_search'] = [
      '#type' => 'checkboxes',
      '#title' => t('Protect/hide images from search engines'),
      '#description' => t('Select options to hide your images from showing up on image searches.'),
      '#options' => [
        'httpheader' => t('Set "X-Robots-Tag: noimageindex" HTTP header'),
        'pagehead' => t('Add "noimageindex" robots meta tag to page head'),
        'robotstxt' => t('Disallow images (jpg, png, gif) indexing in robots.txt - requires <a href="@link" target="_blank">RobotsTxt</a> module', [
          '@link' => 'http://drupal.org/project/robotstxt'
        ]),
      ],
      '#default_value' => \Drupal::configFactory()->getEditable('copyprevention.settings')->get('copyprevention_images_search'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('copyprevention.settings');
    $config->set('copyprevention_body', $form_state->getValue('copyprevention_body'));
    $config->set('copyprevention_images', $form_state->getValue('copyprevention_images'));
    $config->set('copyprevention_images_min_dimension', $form_state->getValue('copyprevention_images_min_dimension'));
    $config->set('copyprevention_images_search', $form_state->getValue('copyprevention_images_search'));
    $config->save();
    parent::submitForm($form, $form_state);
  }

}
