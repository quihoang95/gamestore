<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Users extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('birthday', 'date', [
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('phone', 'string', [
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('address', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('username', 'string', [
            'limit' => 80,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('roleId', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('point', 'integer', [
            'default' => 0,
            'null' => true,
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
