<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Products extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('price', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('categoryId', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'limit' => 150,
            'null' => false,
        ]);
        $table->addColumn('point', 'integer', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->create();
    }
    
}
