<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone 13',
                'price' => '799$',
                'category' => 'mobile',
                'description' => "Apple's iPhone 13 features a ceramic shield front, Super Retina XDR display with True Tone and an A15 Bionic chip",
                'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-pro-max-blue-select?wid=470&hei=556&fmt=jpeg&qlt=95&.v=1645552346295'
            ],
            [
                'name' => 'Samsung s22',
                'price' => '799$',
                'category' => 'mobile',
                'description' => "The Samsung Galaxy S22 is a series of Android-based smartphones designed, developed, manufactured, and marketed by Samsung Electronics as part of its Galaxy S series.",
                'gallery' => 'https://www.gadgetguard.com/media/catalog/product/g/g/gg_bifpe_samsung_galaxy_s21_5g_800x1035_1.jpg'
            ],
            [
                'name' => 'Xiaomi 11T',
                'price' => '378$',
                'category' => 'mobile',
                'description' => "The Xiaomi Mi 11 is an Android-based high-end smartphone designed, developed, produced, and marketed by Xiaomi Inc. succeeding their Xiaomi Mi 10 series",
                'gallery' => 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_87770577/fee_786_587_png/XIAOMI-11T-8-128-GB-DualSIM-Sz%C3%BCrke-K%C3%A1rtyaf%C3%BCggetlen-Okostelefon'
            ],
            [
                'name' => 'Huawei P50 Pro',
                'price' => '1024$',
                'category' => 'mobile',
                'description' => "The Huawei P50 Pro are Harmony-based smartphones manufactured by Huawei.",
                'gallery' => 'https://smartshop.hu/Huawei_P50_Pro_okostelefon_-_arany-fekete_256GB_8GB_RAM_DualSIM-i1309691.png'
            ],
            [
                'name' => 'LG 43UP76703LB Smart LED Television',
                'price' => '383$',
                'category' => 'tv',
                'description' => "LG UHD TVs exceed your expectations every time. You can experience true-to-life picture quality and vibrant colors with four times the number of pixels at Full HD resolution.",
                'gallery' => 'https://s13emagst.akamaized.net/products/40005/40004951/images/res_6547dd9ddb6a0656003501add42298f3.jpg?width=450&height=450&hash=88560745CC0B5D0BE3CB5AF5B7158E00'
            ],
        ]);
    }
}
