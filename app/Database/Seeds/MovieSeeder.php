<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('movies')->where('id >', 1)->delete();
        
            for ($i=1; $i <= 20; $i++) {
                $data = [
                    'title' => 'Movie '.$i,
                    'description'    => 'Database seeding is a simple way to add data into your database. It is especially useful during development where you need ton',
                ];

                $this->db->table('movies')->insert($data);
                
            }
    }
}
?>