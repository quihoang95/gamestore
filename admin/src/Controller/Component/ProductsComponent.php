<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use App\Controller\Component\CommonComponent;

/**
 * Products component
 */
class ProductsComponent extends CommonComponent
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

    public function getAllProd()
    {
        //   $conn = ConnectionManager::get('default');
        //   $statement = $conn->execute('SELECT * FROM products INNER JOIN images ON products.id = images.productId WHERE images.status = 1');
        //   $products = $statement->fetchAll('assoc');
        $query = $this->Products->find()
            ->select([
                'Products.id',
                'Products.name',
                'Products.description',
                'Products.price',
                'status' => 'Images.status',
                'image' => 'Images.image'
            ])
            ->join([
                'table' => 'images',
                'alias' => 'Images',
                'type' => 'left',
                'conditions' => ['Products.id = Images.productId']
            ])
            ->where([
                'OR' => ['images.status' => 1, 'images.status is' => null]
            ])
            ->toArray();
        // dd($query);
        return $query;
    }

    // public function getProdByCate(){
    //     $query = $this->Products->find()
    //                             ->select([
    //                                 'Products.categoryId',
    //                             ])
    //                             ->where([
    //                                 'Products.categoryId' 
    //                             ])
    //                             ->toArray();
    //                             dd($query);
    // }

    public function findById($id)
    {
        $query = $this->Products->find()
        ->select([
            'Products.id',
            'Products.name',
            'Products.description',
            'Products.price',
            'image' => 'Images.image'
        ])
        ->join([
            'table' => 'images',
            'alias' => 'Images',
            'type' => 'left',
            'conditions' => ['Products.id = Images.productId']
        ])
            ->where(['Products.id' => $id])
            ->first();
            // dd($query);
           return $query;
    }

    public function getProdById($productId = null){
        $data= $this->Products->find()
                                ->select([
                                    'Products.id',
                                    'Products.name',
                                    'Products.description',
                                    'Products.price',
                                    'Products.point',                                   
                                    'image' => 'Images.image'
                                ])
                                ->join([
                                    'table' => 'images',
                                    'alias' => 'Images',
                                    'type' => 'left',
                                    'conditions' => ['Products.id = Images.productId']
                                ])
                                ->where(['Products.id' => $productId, 'Images.status' => 1])
                                ->first();
                                // $session = $this->request->session();
                                // $session->write('cart', $data);

                                // dd($this->r('cart'));                         
         return  $data;


    }
}
