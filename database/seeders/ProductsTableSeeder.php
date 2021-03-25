<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //ladies

        


            Product::create([
                'name' => 'Hobbs Petite Tilda Wool Coat, Camel',
                'slug' => 'hobbs-petite-tilda-wool-coat-camel',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

          

            Product::create([
                'name' => 'Whistles Statement Blazer, Navy',
                'slug' => 'whistles-statement-blazer-navy',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'AND/OR Alberta Denim Jacket, Mid Wash Blue',
                'slug' => 'and-or-alberta-denim-jacket-mid-wash-blue',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            
            

            Product::create([
                'name' => 'Pure Collection Lydia Wool Blazer, Navy',
                'slug' => 'pure-collection-lydia-wool-blazer-navy',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'French Connection Wool Platform Felt Smart Coat, Utility Blue',
                'slug' => 'french-connection-wool-platform-felt-smart-coat',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'John Lewis & Partners Jersey Wide Leg Trousers, Black',
                'slug' => 'john-lewis-partners-jersey-wide-leg-trousers',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'hush Mimi Puff Tee, Soft Blue',
                'slug' => 'hush-mimi-puff-tee',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'hush Long Sleeve Raglan T-Shirt, Khaki',
                'slug' => 'hush-long-sleeve-raglan-t-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'hush Lindsey Sweatshirt, Ecru',
                'slug' => 'hush-lindsey-sweatshirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'Barbour Saltburn Hooded Quilted Jacket, Dark Navy',
                'slug' => 'barbour-saltburn-hooded-quilted-jacket',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 149),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Forever New Olympia Collar Jumper, Earthly',
                'slug' => 'forever-new-olympia-collar-jumper',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Barbour International Mayer Waterproof Jacket, Black',
                'slug' => 'barbour-international-mayer-waterproof-jacket',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

         

         
        //End of ladies //
        
            Product::create([
                'name' => 'WRKOUT Black Camo Print Raglan Sports T-Shirt',
                'slug' => 'wrkout-black-camo-print-raglan-sports-t-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem  ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
      
            Product::create([
                'name' => 'Red Ombré Camo Print Sports T-Shirt',
                'slug' => 'red-ombre-camo-print-sports-t-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Grey Shoulder Trim Sports T-Shirt',
                'slug' => 'grey-shoulder-trim-sports-t-shirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Disney The Lion King Nala Sleepsuit Bib and Hat Gift Set ',
                'slug' => 'disney-the-lion-king-nala-sleepsuit-bib-and-hat-gift-set',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Tan Hooded Longline Padded Coat ',
                'slug' => 'tan-hooded-longline-padded-coat',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Red Paris Slogan Oversize Sweatshirt ',
                'slug' => 'red-paris-slogan-oversize-sweatshirt',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(7999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Light Wash Seam Detail Front Tapered Jeans ',
                'slug' => 'light-wash-seam-detail-front-tapered-jeans',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(79, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Black Ribbed Panel Zip Neck Jumper',
                'slug' => 'black-ribbed-panel-zip-neck-jumper',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Navy Floral Fleece Dressing Gown',
                'slug' => 'navy-floral-fleece-dressing-gown',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(79999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Grey Best Grandma Slogan Ankle Socks',
                'slug' => 'grey-best-grandma-slogan-ankle-socks',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(79999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Floral Print Collared Blouse',
                'slug' => 'floral-print-collared-blouse',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(79999, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);

            Product::create([
                'name' => 'Pink Star Print Pyjama Bottoms',
                'slug' => 'pink-star-print-pyjama-bottoms',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'Navy Star Print Pyjama Bottoms',
                'slug' => 'navy-star-print-pyjama-bottoms',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            
            Product::create([
                'name' => 'Fenella Smith Vegan Leather Accessories Gift Set, Yellow/Green',
                'slug' => 'fenella-smith-vegan-leather-accessories-gift-set-yellow-green',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'John Lewis & Partners Hi-Pile Fleece Snuggle Top, Grey',
                'slug' => 'john-lewis-partners-hi-pile-fleece-snuggle-top',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'John Lewis & Partners Soft Fold Chain Leather Shoulder Bag, Grey',
                'slug' => 'john-lewis-partners-soft-fold-chain-leather-shoulder-bag',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'Thought Kinsley Printed Shirt Dress, Vanilla Cream',
                'slug' => 'thought-kinsley-printed-shirt-dress-vanilla-cream',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
            Product::create([
                'name' => 'Kin Grayson Slip-On Flat Leather Court Shoes, Off White',
                'slug' => 'kin-grayson-slip-on-flat-leather-court-shoes',
                'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
                'price' => rand(799, 1499),
                'description' => 'Lorem   ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
            ]);
        

    }
}
