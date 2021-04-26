<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'id' => '002',
            'username' => 'admin@admin.com',
             'password' => '13960292',
              'active' => '1',
               'id_role' => '1',
                'remember_token' => 'rhtrhfhdf@',
                'created_at' => '2021/04/18',
                'updated_at' => '2021/04/18',
                  ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        //$this->call(ArticleTableSeeder::class);

       
    } 
}
