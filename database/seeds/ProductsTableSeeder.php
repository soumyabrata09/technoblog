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
       //c_sousen inside this run() method we are providing the data 
       // here we are calling our model Product.php in 'app/' folder
       Product::create([
           'name' => 'Choco Lave',
           'slug' => 'choco-lava',
           'details' => 'Delicious Treat to the sweettooths',
           'price'  => '230',
           'specification' => 'Choco lave cake and dudges made with freshlly brewed coffee beans'
       ]);
       Product::create([
        'name' => 'Spagetti',
        'slug' => 'spagetti',
        'details' => 'Italian delight',
        'price'  => '321',
        'specification' => 'Example description'
    ]);
    Product::create([
        'name' => 'galaxy s9',
        'slug' => 's9',
        'details' => '64Gb, 6Gb RAM, Mali G1050, Gorilla Glass 4,Span Dragon 850Soc',
        'price'  => '49000',
        'specification' => 'Example Description'
    ]);
    Product::create([
        'name' => 'Mac Book Pro',
        'slug' => 'macbook-pro',
        'details' => '256Gb SSD,14.4 Inch Screen,Retina Display, A9 Processor',
        'price'  => '230',
        'specification' => 'Example Description'
    ]);
    Product::create([
        'name' => 'Alexa Echo',
        'slug' => 'alexa-echo',
        'details' => 'Smart Home Comapanion',
        'price'  => '230',
        'specification' => 'Example Description'
    ]);
     //c_sousen newly added two row values to our Products table 
     //Row details :-1> added Xbox one s details <sample data>
     //              2> added Intel Edison board details <sample data>
      Product::create([
          'name' => 'Intel Edison',
          'slug' => 'intel-edison',
          'details' => 'Breakout Board Kit Antenna EDI2BB.AL.K',
          'price' => '8749',
          'specification' => 'Intel Atom system-on-a-chip (SoC) based on leading-edge 22 nm Silver Mont microarchitecture including a dual-core CPU and single core microcontroller (MCU)
                              Integrated Wi-Fi, Bluetooth LE, memory, and storage
                              Support for more than 30 industry-standard I/O interfaces via a 70-pin connector
                              Support for Yocto Linux, Arduino, Python, and Node.js
                              Open source community software tools enabling ease of adoption that will inspire developers'
      ]);  
      Product::create([
          'name' => 'Microsoft Xbox One X ',
          'slug' => 'xbox-one-x',
          'details' => 'Gaming console : 1TB, Black;
                        Games Included : FIFA 19',
          'price' => '32490',
          'specification' => 'Model Number : Xbox One X;
                              Sales Package : 1 Xbox One X Console, Xbox One Bluetooth Controller, PlayerUnknown Battleground Downloadable Code, Connecting Cables;
                              Controllers : Wireless Controller<Motion Controller Included>,
                              Color :  Black;'
      ]); 
    }
}
