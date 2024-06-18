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
            'jadwal-list',
            'jadwal-create',
            'jadwal-edit',
            'jadwal-delete',
            'kecelakaan-list',
            'kecelakaan-create',
            'kecelakaan-edit',
            'kecelakaan-delete',
            'daftarHitam-list',
            'daftarHitam-create',
            'daftarHitam-edit',
            'daftarHitam-delete',
            'order-list',
            'order-create',
            'order-edit',
            'order-delete',
            'pembayaran-list',
            'pembayaran-create',
            'pembayaran-edit',
            'pembayaran-delete',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        
    }
}
