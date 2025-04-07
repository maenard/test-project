<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create(
            [
                'name' => 'Supplier 1',
                'address' => 'Davao City',
                'contact_num' => '09123123123',
                'email' => 'test@email.com',
            ]
        );
        Supplier::create(
            [
                'name' => 'Supplier 2',
                'address' => 'Davao City',
                'contact_num' => '09123123100',
                'email' => 'test2@email.com',
            ]
        );
    }
}
