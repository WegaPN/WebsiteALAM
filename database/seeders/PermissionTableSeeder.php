<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'ajb-list',
           'ajb-create',
           'ajb-edit',
           'ajb-delete',
           'cv-list',
           'cv-create',
           'cv-edit',
           'cv-delete',
           'pt-list',
           'pt-create',
           'pt-edit',
           'pt-delete',
           'shm-list',
           'shm-create',
           'shm-edit',
           'shm-delete',
           'payments-list',
           'payments-create',
           'payments-edit',
           'payments-delete',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        
    }
}
