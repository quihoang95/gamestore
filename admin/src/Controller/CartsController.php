<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Carts Controller
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
      $this->loadComponent('Cart');
    }
  
    public function add()
    {
        // dd($this->request->getData()['quantity']);
        $quantity = $this->request->getData()['quantity'];
        $productId = $this->request->getData()['id'];
        if($this->request->is('post')) {
            $product = $this->{'Cart'}->addToCart($productId,$quantity);
        }
      
      $this->set(compact('product'));
    }

}
