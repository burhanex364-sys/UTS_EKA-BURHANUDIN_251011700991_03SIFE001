<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcommerceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ecommerce')->insert([
            [
                'name' => 'T-Shirt Polos',
                'description' => 'T-Shirt polos berbahan katun yang nyaman untuk digunakan sehari-hari.',
                'price' => 75000,
                'image' => 't-shirt-polos.png',
                'category' => 'T-Shirt',
            ],
            [
                'name' => 'T-Shirt Oversize',
                'description' => 'T-Shirt oversize dengan desain modern dan potongan longgar.',
                'price' => 95000,
                'image' => 't-shirt-oversize.png',
                'category' => 'T-Shirt',
            ],
            [
                'name' => 'Kemeja Formal',
                'description' => 'Kemeja formal yang cocok untuk bekerja dan acara resmi.',
                'price' => 150000,
                'image' => 'kemeja-formal.png',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Kemeja Flanel',
                'description' => 'Kemeja flanel dengan motif kotak-kotak untuk gaya kasual.',
                'price' => 135000,
                'image' => 'kemeja-flanel.png',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Polo Shirt',
                'description' => 'Polo shirt dengan kerah klasik dan bahan nyaman.',
                'price' => 110000,
                'image' => 'polo-shirt.png',
                'category' => 'Polo',
            ],
            [
                'name' => 'Hoodie',
                'description' => 'Hoodie kasual dengan tudung kepala untuk gaya sehari-hari.',
                'price' => 175000,
                'image' => 'hoodie.png',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Sweater Rajut',
                'description' => 'Sweater rajut yang nyaman untuk suasana sejuk.',
                'price' => 160000,
                'image' => 'sweater-rajut.png',
                'category' => 'Rajut',
            ],
            [
                'name' => 'Jaket Denim',
                'description' => 'Jaket denim bergaya klasik yang mudah dipadukan.',
                'price' => 225000,
                'image' => 'jaket-denim.png',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Celana Chino',
                'description' => 'Celana chino dengan desain sederhana untuk gaya kasual.',
                'price' => 145000,
                'image' => 'celana-chino.png',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Jeans',
                'description' => 'Celana jeans dengan desain klasik untuk berbagai aktivitas.',
                'price' => 190000,
                'image' => 'celana-jeans.png',
                'category' => 'Celana',
            ],
        ]);
    }
}
