<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        //$this->db->table('categories')->where('id =>', 1)->delete();
            
            for ($i=1; $i <= 20; $i++) {

                $data = [
                    'name' => 'category '.$i,
                    ];

                $this->db->table('categories')->insert($data);
            }
    }
}
