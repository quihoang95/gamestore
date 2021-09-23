<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use Cake\Event\EventInterface;

/**
 * Stores Controller
 *
 * @method \App\Model\Entity\Store[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoresController extends AppController
{
  public function beforeFilter(EventInterface $event)
  {
    $this->loadComponent('Products');
  }

  public function index()
  {
    $products = $this->{'Products'}->getAllProd();
    $this->set(compact('products'));
    $this->viewBuilder()->setLayout('store');
  }

  public function detail($id = null)
  {
    $product = $this->{'Products'}->findById($id);
    $this->set(compact('product'));
    $this->viewBuilder()->setLayout('store');
  }

  public function cart()
  {
    
    $this->viewBuilder()->setLayout('store');
  }

  public function confirm()
  {
    $this->viewBuilder()->setLayout('store');
  }

  public function getProdByCate($id)
  {

    $products = $this->{'Products'}->getProdByCate();
    $this->set(compact('products'));
    $this->viewBuilder()->setLayout('store');
  }
}
