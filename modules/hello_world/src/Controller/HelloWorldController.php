<?php
/**
@file
Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {
  public function index() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }

  public function test() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world 2 content'),
    );
  }

}