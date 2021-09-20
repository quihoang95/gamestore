<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Quihn',
            'birthday' => date('Y-m-d H:i:s'),
            'email' => 'quipht@gmail.com',
            'phone' => '0968486666',
            'address' => '182C Chi Lang',
            'username' => 'quihn',
            'password' => sha1('123456'),
            'roleId' => 1,
            'point' => null,
            'create_at'=>date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
