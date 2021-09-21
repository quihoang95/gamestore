<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;
use App\Controller\Component\CommonComponent;

/**
 * Stores component
 */
class StoresComponent extends CommonComponent
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
                                'Products.name',
                                'Products.description',
                                'status' =>'Images.status',
                                'image'=>'Images.image'
                            ])
                            ->join([
                                'table' => 'images',
                                'alias' => 'Images',
                                'type' => 'left',
                                'conditions' => ['Products.id = Images.productId']
                            ])
                            ->where([
                                'OR'=>['images.status' => 1, 'images.status is' => null]])
                            ->toArray();
     return $query;      
    }
}
