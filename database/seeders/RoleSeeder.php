<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'manager',
                'display_name' => 'Project Manager',
                'description' => 'User is the owner and manager of the Diaco Center'
            ],
            [
                'name' => 'admin',
                'display_name' => 'User Administrator',
                'description' => 'User is allowed to manage and edit other users and control all of the producer'
            ],
            [
                'name' => 'provider',
                'display_name' => 'Technology Provider',
                'description' => 'One individual or company offers technology solutions and creates new technologies to meet the needs of the projects.'
            ],
            [
                'name' => 'seeker',
                'display_name' => 'Technology Seeker',
                'description' => 'One investment or company seeks for new technologies to expand or improve efficiencies of their industrial procedures.'
            ],
            [
                'name' => 'advisor',
                'display_name' => 'Advisor',
                'description' => 'An advisor helps you with furnishing on legal issues and significant assistance.'
            ],
        ];

        foreach ($items as $item){
            Role::create($item);
        }
    }
}
