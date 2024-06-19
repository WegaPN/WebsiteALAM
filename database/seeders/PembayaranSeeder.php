<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use Illuminate\Database\Seeder;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembayaran::create([
            'user_id' => 1,
            'order_id' => 1,
            'metodePembayaran' => 'Transfer Bank',
            'jumlahPembayaran' => 100000.00,
            'tanggalPembayaran' => now(),
            'keterangan' => 'Pembayaran untuk pesanan #1',
        ]);
    }
}
