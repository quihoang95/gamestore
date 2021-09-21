<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Datasource\FactoryLocator;


/**
 * Common component
 */
class CommonComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    protected $controller;

    public function initialize(array $config): void
    {
        $this->controller = $this->getController();
    }

    public function loadModel($models): void
    {
        if (is_array($models)) {
            foreach ($models as $model) {
                $this->{$model} = FactoryLocator::get('Table')->get($model);
            }
        } else {
            $this->{$models} =  FactoryLocator::get('Table')->get($models);
        }
    }
}
