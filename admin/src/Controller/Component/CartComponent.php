<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Cart component
 */
class CartComponent extends CommonComponent
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function initialize(array $config): void
    {
        $this->loadModel(['Products']);
    }

    public function addToCart($productId = null , $quantity = null){
        $data= $this->Products->find()
                                ->select([
                                    'Products.id',
                                    'Products.name',
                                    'Products.description',
                                    'Products.price',
                                    'Products.point',
                                    'Products.quantity',
                                    'image' => 'Images.image'
                                ])
                                ->join([
                                    'table' => 'images',
                                    'alias' => 'Images',
                                    'type' => 'left',
                                    'conditions' => ['Products.id = Images.productId']
                                ])
                                ->where(['Products.id' => $productId])
                                ->toArray();
                                dd($data);
                                $save = $this->Session->write('cart', $data);
                                
        return  $save;


    }
    // public function addToCart() {
    //     $this->autoRender = false;
    //     if($this->request->is('post')) {
    //     }
    // }
    // public function addProduct($productId) {
	// 	$allProducts = $this->readProduct();
	// 	if (null!=$allProducts) {
	// 		if (array_key_exists($productId, $allProducts)) {
	// 			$allProducts[$productId]++;
	// 		} else {
	// 			$allProducts[$productId] = 1;
	// 		}
	// 	} else {
	// 		$allProducts[$productId] = 1;
	// 	}
		
	// 	$this->saveProduct($allProducts);
	// }
}
