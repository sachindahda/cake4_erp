<?php 
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class CreateUsers extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 255])
              ->addColumn('password', 'string', ['limit' => 255])
              ->addColumn('role', 'string', ['limit' => 50])
              ->addTimestamps()
              ->create();

        // Insert an admin user
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('admin123');
        $data = [
            'username' => 'admin',
            'password' => $password,
            'role' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $table->insert($data)->saveData();
    }
}
