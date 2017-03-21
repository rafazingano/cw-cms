<?php

use Illuminate\Database\Seeder;

class RealEstateTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->command->info('Criando os options do real estate.');
        $options = [
            ['label' => 'option.image', 'name' => 'image', 'field_id' => 20],
            ['label' => 'option.gallery', 'name' => 'gallery', 'field_id' => 21]
        ];
        foreach ($options as $option) {
            $id = App\Option::where($option)->first()->id;            
            $o[] = isset($id)? $id : App\Option::create($option)->id;
        }
        $this->command->info('Criando o tipo de post do Real estate.');
        $attributes = [
            'title' => 'type.real_estate', 
            'slug' => 'real-estate', 
            'description' => 'Real Estate'
        ];
        $type = App\Type::Create($attributes);
        $type->options()->sync($o);
        $this->command->info('Real Estate criado com sucesso!');
    }

}
