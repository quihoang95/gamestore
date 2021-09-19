<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Stores Controller
 *
 * @method \App\Model\Entity\Store[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoresController extends AppController
{
  public function home() 
  {
    $this->viewBuilder()->setLayout('store');   
  }
}
