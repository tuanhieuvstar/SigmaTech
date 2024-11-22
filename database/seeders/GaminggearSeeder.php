<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;


use App\Models\Attribute;
use App\Models\GamingGear;
use App\Models\GamingGearAttribute;

class GaminggearSeeder extends Seeder{

    public function run():void{
        $gaminggears = [
            [
                'name' => 'Razer Huntsman V2 Analog',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Razer'],
                    ['name' => 'Model', 'value' => 'HuntsmanV2'],
                    ['name' => 'Price', 'value' => 6990000],
                    ['name' => 'Deal Price', 'value' => 6290000],
                    ['name' => 'Sale Price', 'value' => 5990000],
                    ['name' => 'Rating', 'value' => 4.9],
                    ['name' => 'On Top', 'value' => '1'],
                    ['name' => 'Tồn kho', 'value' => 80],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/keyboard/1/Thumb1.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/keyboard/1/Thumb1_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/keyboard/1/Image1.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'keyboard'],
                    ['name' => '[GG] Kết nối', 'value' => 'USB-C'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Aluminum, Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '1.5kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Analog switches, Wrist rest'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Type-C, USB-A'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Detachable cable, Wrist rest'],
                ]
            ],
            [
                'name' => 'Corsair K70 RGB MK.2',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Corsair'],
                    ['name' => 'Model', 'value' => 'K70RGBMK2'],
                    ['name' => 'Price', 'value' => 3990000],
                    ['name' => 'Deal Price', 'value' => 3790000],
                    ['name' => 'Sale Price', 'value' => 3490000],
                    ['name' => 'Rating', 'value' => 4.9],
                    ['name' => 'On Top', 'value' => '1'],
                    ['name' => 'Tồn kho', 'value' => 120],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/keyboard/2/Thumb2.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/keyboard/2/Thumb2_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/keyboard/2/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/keyboard/2/Image2.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'keyboard'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Aluminum, Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '1.25kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Dedicated media keys, RGB lighting'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB-A'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Detachable wrist rest'],
                ]
            ],
            [
                'name' => 'SteelSeries Apex Pro',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'SteelSeries'],
                    ['name' => 'Model', 'value' => 'ApexPro'],
                    ['name' => 'Price', 'value' => 5490000],
                    ['name' => 'Deal Price', 'value' => 4990000],
                    ['name' => 'Sale Price', 'value' => 4690000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'On Top', 'value' => '1'],
                    ['name' => 'Tồn kho', 'value' => 100],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Thumb3.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Thumb3_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/keyboard/3/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'keyboard'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Steel, Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '1.4kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Adjustable actuation keys'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB-A'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Magnetic wrist rest'],
                ]
            ],
            [
                'name' => 'Keychron K6 Wireless',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Keychron'],
                    ['name' => 'Model', 'value' => 'K6Wireless'],
                    ['name' => 'Price', 'value' => 2990000],
                    ['name' => 'Deal Price', 'value' => 2790000],
                    ['name' => 'Sale Price', 'value' => 2590000],
                    ['name' => 'Rating', 'value' => 4.7],
                    ['name' => 'On Top', 'value' => '1'],
                    ['name' => 'Tồn kho', 'value' => 85],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Thumb4.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Thumb4_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/keyboard/4/Image4.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'keyboard'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic, Aluminum'],
                    ['name' => '[GG] Trọng lượng', 'value' => '0.75kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Compact 65% layout'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB-C'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB-C cable, keycap puller'],
                ]
            ],
            [
                'name' => 'HyperX Alloy FPS Pro',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'HyperX'],
                    ['name' => 'Model', 'value' => 'AlloyFPSPro'],
                    ['name' => 'Price', 'value' => 1990000],
                    ['name' => 'Deal Price', 'value' => 1790000],
                    ['name' => 'Sale Price', 'value' => 1590000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'On Top', 'value' => '1'],
                    ['name' => 'Tồn kho', 'value' => 140],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/keyboard/5/Thumb5.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/keyboard/5/Thumb5_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/keyboard/5/Image1.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'keyboard'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Steel, Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '1.1kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Compact, durable design'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB-A'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Removable USB cable'],
                ]
            ],
            [
                'name' => 'Logitech G305 Lightspeed',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Logitech'],
                    ['name' => 'Model', 'value' => 'G305'],
                    ['name' => 'Price', 'value' => 1190000],
                    ['name' => 'Deal Price', 'value' => 1090000],
                    ['name' => 'Sale Price', 'value' => 999000],
                    ['name' => 'Rating', 'value' => 4.7],
                    ['name' => 'Tồn kho', 'value' => 150],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/mouse/1/Thumb1.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/mouse/1/Thumb1_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/mouse/1/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/mouse/1/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/mouse/1/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/mouse/1/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/mouse/1/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'mouse'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'No'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '99g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Ultra-fast LIGHTSPEED wireless'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Receiver'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'AA battery, USB receiver'],
                ]
            ],
            [
                'name' => 'Razer DeathAdder V3 Pro',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Razer'],
                    ['name' => 'Model', 'value' => 'DeathAdderV3Pro'],
                    ['name' => 'Price', 'value' => 3990000],
                    ['name' => 'Deal Price', 'value' => 3790000],
                    ['name' => 'Sale Price', 'value' => 3490000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'Tồn kho', 'value' => 90],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/mouse/3/Thumb3.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/mouse/3/Thumb3_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/mouse/3/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/mouse/3/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/mouse/3/Image3.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'mouse'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'No'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '63g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Razer HyperSpeed wireless, ergonomic design'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Type-C'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB-C cable, dongle'],
                ]
            ],
            [
                'name' => 'SteelSeries Aerox 3 Wireless',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'SteelSeries'],
                    ['name' => 'Model', 'value' => 'Aerox3'],
                    ['name' => 'Price', 'value' => 2590000],
                    ['name' => 'Deal Price', 'value' => 2390000],
                    ['name' => 'Sale Price', 'value' => 2290000],
                    ['name' => 'Rating', 'value' => 4.6],
                    ['name' => 'Tồn kho', 'value' => 120],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/mouse/4/Thumb4.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/mouse/4/Thumb4_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/mouse/4/Image1.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'mouse'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '66g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Water-resistant, ultra-lightweight'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Type-C'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB-C cable, dongle'],
                ]
            ],
            [
                'name' => 'Corsair Harpoon RGB Wireless',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Corsair'],
                    ['name' => 'Model', 'value' => 'HarpoonRGB'],
                    ['name' => 'Price', 'value' => 1590000],
                    ['name' => 'Deal Price', 'value' => 1390000],
                    ['name' => 'Sale Price', 'value' => 1290000],
                    ['name' => 'Rating', 'value' => 4.7],
                    ['name' => 'Tồn kho', 'value' => 100],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/mouse/5/Thumb5.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/mouse/5/Thumb5_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/mouse/5/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/mouse/5/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/mouse/5/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/mouse/5/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/mouse/5/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'mouse'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '99g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Ergonomic design, ultra-fast wireless'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Type-C'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB cable, dongle'],
                ]
            ],
            [
                'name' => 'Logitech G502 Hero',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Logitech'],
                    ['name' => 'Model', 'value' => 'G502Hero'],
                    ['name' => 'Price', 'value' => 1590000],
                    ['name' => 'Deal Price', 'value' => 1390000],
                    ['name' => 'Sale Price', 'value' => 1290000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'Tồn kho', 'value' => 100],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/mouse/2/Thumb2.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/mouse/2/Thumb2_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/mouse/2/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/mouse/2/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/mouse/2/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/mouse/2/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/mouse/2/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'mouse'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wired'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '121g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Adjustable weights, Hero sensor'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB Type-A'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Adjustable weights'],
                ]
            ],
            [
                'name' => 'SteelSeries Arctis Pro Wireless',
                'category_id' => 5,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'SteelSeries'],
                    ['name' => 'Model', 'value' => 'ArctisPro'],
                    ['name' => 'Price', 'value' => 7990000],
                    ['name' => 'Deal Price', 'value' => 7490000],
                    ['name' => 'Sale Price', 'value' => 7290000],
                    ['name' => 'Rating', 'value' => 4.9],
                    ['name' => 'Tồn kho', 'value' => 40],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/headphones/1/Thumb1.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/headphones/1/Thumb1_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/headphones/1/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/headphones/1/Image2.jpg'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'No'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Steel, Plastic'],
                    ['name' => '[GG] Trọng lượng', 'value' => '398g'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Hi-Res audio, Dual battery system'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB-C, 3.5mm jack'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Extra battery, USB cable'],
                ]
            ],
            [
                'name' => 'Razer Kraken Tournament Edition',
                'category_id' => 6,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Razer'],
                    ['name' => 'Model', 'value' => 'KrakenTE'],
                    ['name' => 'Price', 'value' => 1990000],
                    ['name' => 'Deal Price', 'value' => 1790000],
                    ['name' => 'Sale Price', 'value' => 1690000],
                    ['name' => 'Rating', 'value' => 4.7],
                    ['name' => 'Tồn kho', 'value' => 100],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/headphones/0/Thumb0.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/headphones/0/Thumb0_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/headphones/0/Image1.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'headphone'],
                    ['name' => '[GG] Kết nối', 'value' => 'USB, 3.5mm'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'No'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic, Memory Foam'],
                    ['name' => '[GG] Trọng lượng', 'value' => '0.3kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'THX Spatial Audio'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB, 3.5mm jack'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB audio controller'],
                ]
            ],
            [
                'name' => 'SteelSeries Arctis Pro Wireless',
                'category_id' => 6,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'SteelSeries'],
                    ['name' => 'Model', 'value' => 'ArctisProWireless'],
                    ['name' => 'Price', 'value' => 8990000],
                    ['name' => 'Deal Price', 'value' => 8490000],
                    ['name' => 'Sale Price', 'value' => 7990000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'Tồn kho', 'value' => 50],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/headphones/2/Thumb2.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/headphones/2/Thumb2_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/headphones/2/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/headphones/2/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/headphones/2/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/headphones/2/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/headphones/2/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'headphone'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, USB'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Aluminum, Steel, Fabric'],
                    ['name' => '[GG] Trọng lượng', 'value' => '0.4kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Dual Wireless, Hi-Res Audio'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB, Wireless transmitter'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'Transmitter, USB cable, Audio cables'],
                ]
            ],
            [
                'name' => 'HyperX Cloud II Wireless',
                'category_id' => 6,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'HyperX'],
                    ['name' => 'Model', 'value' => 'CloudIIWireless'],
                    ['name' => 'Price', 'value' => 3290000],
                    ['name' => 'Deal Price', 'value' => 2990000],
                    ['name' => 'Sale Price', 'value' => 2790000],
                    ['name' => 'Rating', 'value' => 4.7],
                    ['name' => 'Tồn kho', 'value' => 75],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/headphones/3/Thumb3.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/headphones/3/Thumb3_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/headphones/3/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/headphones/3/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/headphones/3/Image3.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'headphone'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, USB'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'No'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Aluminum, Memory Foam'],
                    ['name' => '[GG] Trọng lượng', 'value' => '0.32kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Virtual 7.1 Surround Sound'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'Wireless USB dongle'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB charging cable'],
                ]
            ],
            [
                'name' => 'Logitech G733 Lightspeed Wireless',
                'category_id' => 6,
                'attributes' => [
                    ['name' => 'Brand', 'value' => 'Logitech'],
                    ['name' => 'Model', 'value' => 'G733Lightspeed'],
                    ['name' => 'Price', 'value' => 3490000],
                    ['name' => 'Deal Price', 'value' => 3190000],
                    ['name' => 'Sale Price', 'value' => 2990000],
                    ['name' => 'Rating', 'value' => 4.8],
                    ['name' => 'Tồn kho', 'value' => 90],
                    ['name' => 'Thumbnail', 'value' => '/assets/img/products/gaming-gear/headphones/4/Thumb4.jpg'],
                    ['name' => 'Thumbnail Small', 'value' => '/assets/img/products/gaming-gear/headphones/4/Thumb4_small.jpg'],
                    ['name' => 'Image1', 'value' => '/assets/img/products/gaming-gear/headphones/4/Image1.jpg'],
                    ['name' => 'Image2', 'value' => '/assets/img/products/gaming-gear/headphones/4/Image2.jpg'],
                    ['name' => 'Image3', 'value' => '/assets/img/products/gaming-gear/headphones/4/Image3.jpg'],
                    ['name' => 'Image4', 'value' => '/assets/img/products/gaming-gear/headphones/4/Image4.jpg'],
                    ['name' => 'Image5', 'value' => '/assets/img/products/gaming-gear/headphones/4/Image5.jpg'],
                    ['name' => '[GG] Loại thiết bị', 'value' => 'headphone'],
                    ['name' => '[GG] Kết nối', 'value' => 'Wireless, USB'],
                    ['name' => '[GG] Hệ thống đèn RGB', 'value' => 'Yes'],
                    ['name' => '[GG] Chất liệu', 'value' => 'Plastic, Fabric'],
                    ['name' => '[GG] Trọng lượng', 'value' => '0.28kg'],
                    ['name' => '[GG] Tính năng đặc biệt', 'value' => 'Lightspeed wireless, RGB lighting'],
                    ['name' => '[GG] Cổng kết nối', 'value' => 'USB wireless receiver'],
                    ['name' => '[GG] Phụ kiện đi kèm', 'value' => 'USB receiver, charging cable'],
                ]
            ],
        ];

        foreach ($gaminggears as $gaminggearData) {
            $gaminggear = GamingGear::create([
                'name' => $gaminggearData['name'],
                'category_id' => $gaminggearData['category_id'],
            ]);
        
            foreach ($gaminggearData['attributes'] as $attr) {
                $attribute = Attribute::firstOrCreate(['name' => $attr['name']]);
                GaminggearAttribute::create([
                    'gaminggear_id' => $gaminggear->id,
                    'attribute_id' => $attribute->id,
                    'value' => $attr['value'],
                ]);
            }
        }
        
    }
}
?>