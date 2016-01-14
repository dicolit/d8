<?php
/**
@file
Contains \Drupal\dc_article\Controller\DcArticleController.
 */

namespace Drupal\dc_article\Controller;

use Drupal\Core\Controller\ControllerBase;

class DcArticleController extends ControllerBase {
  public function index() {
    $articles = array();
    for($i=1;$i<11;$i++) {
      $tmp = new \stdClass();
      $tmp->title = 'Title '.$i;
      $articles[] = $tmp;
    }

    $article_pager = array();

    $build = array(
      '#title'=>'AAAA',
      '#theme' => 'article_page',
      '#articles' => $articles,
      '#article_pager' => $article_pager,
    );

    $build['#attached']['library'][] = 'dc_article/dc_article.article_page';

    /*
    $form = array(
      '#type' => 'markup',
      '#markup' => t('Articles'),
    );*/
    return $build;

  }

  public function detail() {
    $form = array(
      '#type' => 'markup',
      '#markup' => t('Article Detail'),
    );
    return $form;
  }

  public function categoryIndex() {

    $form = array(
      '#type' => 'markup',
      '#markup' => t('Category'),
    );


    return $form;
  }

}