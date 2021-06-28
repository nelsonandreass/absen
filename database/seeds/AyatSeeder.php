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
        for($i = 1 ; $i <= 10 ; $i++){
            DB::table('ayats')->insert([
                'judul' => "judul".$i,
                'firman' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum illo et libero, sunt hic architecto aliquid ipsam cumque modi eveniet aperiam accusantium. Unde eius libero soluta vel suscipit architecto aut.',
                'wadah' => ''
            ]);
        }
       
    }
}
