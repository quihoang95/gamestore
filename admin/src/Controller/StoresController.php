<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Stores Controller
 *
 * @method \App\Model\Entity\Store[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoresController extends AppController
{
  public function index() 
  {
    $conn = ConnectionManager::get('default');
    // dd($conn);
    $statement = $conn->execute('SELECT * from products inner join images');
    $products = $statement->fetch('assoc');
    // dd($products);
    $this->set(compact('products'));
    $this->viewBuilder()->setLayout('store');   
  }
}
