<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create the first user
        $user1 = User::create([
            'name' => 'Udin', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);

        // Create the second user
        $user2 = User::create([
            'name' => 'Deva', 
            'email' => 'deva28@gmail.com',
            'password' => bcrypt('deva123')
        ]);
    
        // Create the Admin role
        $role = Role::create(['name' => 'Admin']);
     
        // Get all permissions
        $permissions = Permission::pluck('id','id')->all();
   
        // Sync permissions to the role
        $role->syncPermissions($permissions);
     
        // Assign the Admin role to both users
        $user1->assignRole([$role->id]);
        $user2->assignRole([$role->id]);
    }
}