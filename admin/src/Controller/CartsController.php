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
    $this->loadComponent('Products');
  }

  public function index()
  {
    //     $this->paginate = [
    //         'contain' => ['Roles']
    //     ];
    //     $users = $this->paginate($this->Users);
    // $this->set(compact('users'));
    $this->viewBuilder()->setLayout('store');
  }

  public function add()
  {

    if ($this->request->is('post')) {
      
      $session = $this->request->getSession();
      // dd($session);
      $productId = $this->request->getData()['product_id'];
      $products = $this->{'Products'}->getProdById($productId);

      $quantity = $this->request->getData()['quantity'];
      
      $cartData = $session->read('cart');

      // dd($cartData);
      $quantity += isset($cartData[$productId]) ? $cartData[$productId]['quantity'] : 0;

      $itemArray = [
        $productId => [
          'name' => $products['name'],
          'image'=> $products['image'],
          'price' => $products['price'],
          'quantity'=> $quantity
        ]];

      if(!$session->check('cart')) {
        $cartData = $itemArray;
      }
      else{
        if(isset($cartData[$productId]))
        {
          $cartData[$productId] = array_merge($cartData[$productId],$itemArray[$productId]);
        }
        else
        {
          $cartData += $itemArray;
        }
          
        
        
       
      }
      $session->write('cart',$cartData);
      dd($session->read('cart'));
    }
    
  }
}
