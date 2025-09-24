<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Main purpose of a cryptocurrency',
                'answer' => 'The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How can I make refund?',
                'answer' => 'The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'How do they operate on blockchain?',
                'answer' => 'The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.',
                'is_active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}