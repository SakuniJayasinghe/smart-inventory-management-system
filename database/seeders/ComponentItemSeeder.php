<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentItemSeeder extends Seeder
{
    protected $data = [
        array(
            'id' => '1001',
            'code' => '', 
            'name' => 'ARDUINO UNO REV3', 
            'brand' => 'Arduino', 
            'productCode' => 'DEV101', 'specifications' => 'ATMega328p Microcontroller', 
            'description' => 'The Arduino Uno is an open-source microcontroller board based on the Microchip ATmega328P microcontroller and developed by Arduino.cc.[2][3] The board is equipped with sets of digital and analog input/output (I/O) pins that may be interfaced to various expansion boards (shields) and other circuits.', 
            'isAvailable' => '1', 'price' => '1200.00', 'type' => 'Development-Board', 'family' => 'Complex-Electronics', 'size' => 'medium', 
            'thumb' => 'comit1001.jpg'
        ),
        array(
            'id' => '1002', 'code' => '', 'name' => 'UA741CP Operational Amplifier', 'brand' => NULL, 'productCode' => 'ICOA101', 'specifications' => 'UA741CP OpAmp 1MHz', 
            'description' => 'The 741 Op Amp IC is a monolithic integrated circuit, comprising of a general purpose Operational Amplifier.', 
            'isAvailable' => '1', 'price' => '80.00', 'type' => 'Integrated Circuit', 'family' => 'Simple-Electronics', 'size' => 'small', 
            'thumb' => 'comit1002.jpg'
        )
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $index => $setting) {
            $result = DB::table('component_items')->insert($setting);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }

        $this->command->info('Inserted ' . count($this->data) . ' records to component_items table');
    }
}
