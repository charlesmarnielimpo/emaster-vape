<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Product::create([
            'category_id' => 4,
            'featured' => true,
        	'name' => 'Samsung 25r - 18650 Battery (2 pack)',
        	'slug' => 'samsung-25r-18650-battery-2-pack',
        	'details' => 'The authentic green-label Samsung 25 is now available at under $6 each from vaping.com. Buy now!',
        	'price' => '597.50',
        	'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'featured' => true,
            'name' => 'Brillipower 18650 Batteries - 2 Pack',
            'slug' => 'brillipower-18650-batteries-2-pack',
            'details' => 'If you have been looking for a new battery that has been tested to live up to its claims, then we have what you have been looking for.',
            'price' => '849.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'AW IMR',
            'slug' => 'aw-imr',
            'details' => 'The premier brand of lithium ion rechargeable batteries, specifically designed to get the best performance out of high end flashlights.',
            'price' => '549.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'LG HE2 18650 (2 pack)',
            'slug' => 'lg-he2-18650-2-pack',
            'details' => 'Whether you use a regulated or mechanical mod, the LG HE2 will ensure your device is operating at peak performance!',
            'price' => '599.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Mini Drip Tips',
            'slug' => 'mini-drip-tips',
            'details' => 'Sophisticated mini drip tips from Nolli Designs, hand crafted in Utah from 303 stainless steel and dyed wood.',
            'price' => '1249.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Obrero',
            'slug' => 'obrero',
            'details' => 'Uniquely designed drip tip, featuring a textured outer sleeve and wide bore mouth for easy dripping.',
            'price' => '1400.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'featured' => true,
            'name' => 'TFV8 Baby Coils',
            'slug' => 'tfv8-baby-coils',
            'details' => 'These atomizers are compatible with the SMOK TFV8 Baby line of tanks including the "Baby Beast" and "Big Baby Beast".',
            'price' => '749.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Trabuco',
            'slug' => 'trabuco',
            'details' => 'Beautiful anodized aluminum drip tips in a variety of colors, finish your tank with style.',
            'price' => '1200.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 4,
            'name' => 'Wurl',
            'slug' => 'wurl',
            'details' => 'Innovative and stylish, a 2 piece, wide bore drip tip design.',
            'price' => '1200.00',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 3,
            'featured' => true,
            'name' => 'Blue Razz',
            'slug' => 'blue-razz',
            'details' => 'Air Factory Blue Razz is a blue raspberry taffy -guaranteed to be your new favorite candy vape',
            'price' => '1097.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Frost Bite - Salts',
            'slug' => 'frost-bite-salts',
            'details' => 'Frost Bite from Naked 100 is a tropical blend of Cantaloupe, Honeydew and menthol, with the smooth throat-hit that only nicotine salts can give.',
            'price' => '999.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Heisenberg',
            'slug' => 'heisenberg',
            'details' => 'Heisenberg by Innevape has developed a cult following of die-hard vapers, and for good reason. This over the top concoction boasts more "blue" flavors than just about any liquid available.',
            'price' => '1099.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Brain Fogger Target Mini Bad Ass Kit',
            'slug' => 'brain-fogger-target-mini-bad-ass-kit',
            'details' => 'Brain Fogger Vape Pen Atomizer makes vaping wax and concentrates extraordinary. The Fogger is a new exclusive advanced Wax vaporizer atomizer tank.',
            'price' => '4997.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'KandyPens Prism Plus Vaporizer',
            'slug' => 'kandypens-prism-plus-vaporizer',
            'details' => 'Uber compact and boasting premium vapor production, KandyPens Prism Plus is one of the stealthiest AND powerful wax pens to date. The slightly larger brother of the KandyPens Prism, the Plus is just 10.5 centimeters long, making it easily concealable and pocket-friendly. Despite its small stature, KandyPens Prism+ produces the large, potent rips for which KandyPens is known, without sacrificing stealthiness. Waxy oil enthusiasts can enjoy the best vapor on-the-go with no hassle.',
            'price' => '6399.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 1,
            'featured' => true,
            'name' => 'Kroma Slipstream Kit',
            'slug' => 'kroma-slipstream-kit',
            'details' => 'A high-performance compact mod that looks as good as it feels!',
            'price' => '2497.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Pulsar APX W Vaporizer',
            'slug' => 'pulsar-apx-w-vaporizer',
            'details' => 'Pulsar is back with an exclusive wax version of their massively popular APX portable vaporizer. The new APX Wax Vaporizer combines the affordability and aesthetics of the original APX with an advanced Tripe Quartz Rod Atomizer, resulting in a revolutionary wax vaporizer that will forever change the way you enjoy dabs. Like the dry herb version of the APX, the new APX Wax is ultra-affordable and compact, and featureds incredible build-quality. If you are ballin on a budget (and let us face it, most of us are), the APX Wax is a must-have, and by far the most high-quality device in its class.',
            'price' => '3499.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'featured' => true,
            'name' => 'Cleito Exo Tank',
            'slug' => 'cleito-exo-tank',
            'details' => 'There was a time when you could not ask for a recommendation of a great tank without the name "Cleito" being mentioned. Since then, other tanks have come and gone, but the Cleito name still means quality, performance, and reliability.',
            'price' => '1149.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Flow Sub-ohm Tank',
            'slug' => 'flow-sub-ohm-tank',
            'details' => 'The Flow from Wotofo is a solid 24 mm diameter sub-ohm tank that delivers robust build quality, functional design elements, and coil compatibility with Smok’s V8 Baby coil series.',
            'price' => '949.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'featured' => true,
            'name' => 'Peerless RDTA',
            'slug' => 'peerless-rdta',
            'details' => 'The Peerless RDTA from GeekVape delivers the performance and customization potential of a Rebuildable Dripping Atomizer with the convenience of a tank! ',
            'price' => '1499.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Subtank Mini',
            'slug' => 'subtank-mini',
            'details' => 'This innovative subtank offers a large capacity and customizable vaping experience, all in a small package.',
            'price' => '1349.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'featured' => true,
            'name' => 'TFV8 X-Baby',
            'slug' => 'tfb8-x-baby',
            'details' => 'Forging a brave new path in the sub-ohm tank segment, Smok has released an innovative variation to the already incredibly broad lineup of their TFV8 family of tanks.',
            'price' => '1097.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Product::create([
            'category_id' => 2,
            'featured' => true,
            'name' => 'TFV12 Cloud Beast King',
            'slug' => 'tfv12-cloud-beast-king',
            'details' => 'Kneel before the king, introducing the revolutionary TFV12 Cloud Beast King tank from SMOK.',
            'price' => '1849.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
