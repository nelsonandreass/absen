<?php

use Illuminate\Database\Seeder;

class AyatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ayats')->insert([
            'firman' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.',
            'wadah' => 'nelson@gmail.com'
        ]);
    }
}
