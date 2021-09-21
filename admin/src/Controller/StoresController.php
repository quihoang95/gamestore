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
    $this->loadComponent('Stores');
  }

  public function index(){
    $products = $this->{'Stores'}->getAllProd();
    $this->set(compact('products'));
    $this->viewBuilder()->setLayout('store'); 
  }

  public function detail(){
    $this->viewBuilder()->setLayout('detailStore'); 
  }
  
}
