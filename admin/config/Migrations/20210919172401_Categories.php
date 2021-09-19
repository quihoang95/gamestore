<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Categories extends AbstractMigration
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
        $table = $this->table('categories');
        $table->addColumn('name', 'string', [
            'default' => 'null',
            'limit' => 100,
            'null' => false,
        ]);
        $table->create();
    }
}
