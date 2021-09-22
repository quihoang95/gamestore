<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class OrderDetail extends AbstractMigration
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
        $table = $this->table('orderDetail');
        $table->addColumn('productId', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('orderId', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('quantity', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('price', 'string', [
            'null' => false,
        ]);
        $table->addColumn('create_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => true,
        ]);
        $table->addColumn('update_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => true,
        ]);
        $table->addColumn('del_flag', 'boolean', [
            'null' => true,
        ]);
        $table->create();
    }
}
