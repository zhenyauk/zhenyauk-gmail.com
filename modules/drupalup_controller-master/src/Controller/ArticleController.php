<?php

namespace Drupal\drupalup_controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Drupal\media\Entity\Media;
use Drupal\file\Entity\File;


class ArticleController {

  public function pages(Request $request) {


    $query = \Drupal::database()->select('node_field_data', 'n');
    $query->fields('n', ['nid', 'title']);
    $query->condition('n.type', 'page');
    $query->range(0, 1);
    $title = $query->execute()->fetchAssoc();

    //$title = $request->get('some');
    $title = 'Catalog';

    $items = $this->getAllTerms();

    // Custom term
    $tid = 1;
    $term = [
      'term_id' => \Drupal\taxonomy\Entity\Term::load($tid)->get('tid')->value,
      'title' => \Drupal\taxonomy\Entity\Term::load($tid)->get('name')->value,
      'description' => \Drupal\taxonomy\Entity\Term::load($tid)->get('description')->value
    ];


    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->fields('ti', ['nid']);

    $query->condition('ti.tid', 1);
    $pids = $query->execute()->fetchAll();

    $articles = [];

    $articles = [];

    foreach($pids as $pid){
      $ent = $this->getPost((int) $pid->nid);

      $fff = $ent->get('field_image')->target_id;
      $ent->img = File::load($fff);
      $articles[] = $ent->toArray();
      $images[] = File::load($fff);

      // ->toArray();
    }

    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#images' =>$images,
      '#title' => $title,
      '#term' => $term,
      '#articles' => $articles
    );
  }


  public function page(Request $request) {




    //$par = $request->get('page');
    $tid = (int) $request->get('page');

    $items = $this->getAllTerms();

    $term = [
      'term_id' => \Drupal\taxonomy\Entity\Term::load($tid)->get('tid')->value,
      'title' => \Drupal\taxonomy\Entity\Term::load($tid)->get('name')->value,
      'description' => \Drupal\taxonomy\Entity\Term::load($tid)->get('description')->value
    ];

    $title = $term['title'];





    $query = \Drupal::database()->select('taxonomy_index', 'ti');
    $query->fields('ti', ['nid']);

    $query->condition('ti.tid', $tid);
    $pids = $query->execute()->fetchAll();

    $articles = [];

    foreach($pids as $pid){
      $ent = $this->getPost((int) $pid->nid);

      $fff = $ent->get('field_image')->target_id;
      $ent->img = File::load($fff);
      $articles[] = $ent->toArray();
      $images[] = File::load($fff);

      // ->toArray();
    }


   // $nodes = \Drupal\node\Entity\Node::load(6);
   // $f = $nodes->get('field_image')->target_id;

    $file_storage = \Drupal::entityTypeManager()->getStorage('file');
    //$title = $file_storage->load(3);


    return array(
      '#theme' => 'article_list',
      '#items' => $items,
      '#title' => $title,
      '#term' => $term,
      '#images' => $images,
      '#articles' => $articles
    );
  }


  public function getPost($id = 1)
  {

    //$query = \Drupal::entityQuery('node');
   // $query->condition('type', 'article');
    //$query->condition('field_tags.entity:taxonomy_term.name', 'Bitcoin');
    //$nids = $query->execute();

    $nodes = \Drupal\node\Entity\Node::load($id);

    return $nodes;

  }



  public function getAllTerms()
  {
    $vid = 'tags';
    $terms =\Drupal::entityTypeManager()
    ->getStorage('taxonomy_term')
    ->loadTree($vid);
    foreach ($terms as $term) {
    $items[] = array(
      'id' => $term->tid,
      'name' => $term->name,
      'description' => $term->description
    );
    }
    return $items;
  }




}
