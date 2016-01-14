<?php
/**
@file
Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function index() {

    $form = array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );

    $form['#attached']['js'][] = array(
      'type' => 'file',
      'data' => 'js/hello_world_page.js',
    );

    return $form;
  }

  public function test() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world 2 content'),
    );
  }

}