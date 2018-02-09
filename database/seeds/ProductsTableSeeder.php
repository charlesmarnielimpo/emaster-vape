<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name' => 'Cloud Beast Prince',
        	'slug' => 'cloud-beast-prince',
        	'details' => 'cloud beast prince test 1',
        	'price' => '49.99',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'Stick V8',
        	'slug' => 'stick-v8',
        	'details' => 'stick v8 test 2',
        	'price' => '200.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'G PRIV2',
        	'slug' => 'g-priv2',
        	'details' => 'g priv2 test 3',
        	'price' => '155.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'Battery',
        	'slug' => 'battery',
        	'details' => 'battery test 4',
        	'price' => '47.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'Battery Cover',
        	'slug' => 'battery-cover',
        	'details' => 'battery cover test 5',
        	'price' => '65.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'TFV8 Big Family',
        	'slug' => 'tfv8-big-family',
        	'details' => 'TFV8 Big Family test 6',
        	'price' => '36.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'Vape Pen Tank Big Family',
        	'slug' => 'vape-pen-tank-big-family',
        	'details' => 'Vape Pen Tank Big Family test 7',
        	'price' => '69.99',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);

        Product::create([
        	'name' => 'TFV8 Big Baby Light Edition',
        	'slug' => 'tfv8-big-baby-light-edition',
        	'details' => 'TFV8 Big Baby Light Edition test 6',
        	'price' => '128.00',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate'
        ]);
    }
}
