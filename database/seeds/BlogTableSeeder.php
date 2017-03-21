<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->command->info('Criando os options do blog.');
        $options = [
            ['label' => 'option.image', 'name' => 'image', 'field_id' => 20],
            ['label' => 'option.gallery', 'name' => 'gallery', 'field_id' => 21]
        ];
        foreach ($options as $option) {
            $id = App\Option::where($option)->first()->id;            
            $o[] = isset($id)? $id : App\Option::create($option)->id;           
        }
        $this->command->info('Criando o tipo de post do blog.');
        $attributes = [
            'title' => 'type.blog', 
            'slug' => 'blog', 
            'description' => 'Blog'
        ];
        $type = App\Type::Create($attributes);
        $type->options()->sync($o);
        $this->command->info('Blog criado com sucesso!');
    }

}
