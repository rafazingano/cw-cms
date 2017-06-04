<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Theme extends Model {

    protected $fillable = [
        'title', 'slug', 'status'
    ];

    public function sites() {
        return $this->hasMany('App\Site');
    }

    public static function init($id) {
        $theme = Theme::findOrFail($id);
        $init = include resource_path('views/site/' . $theme->slug . '/init.php');
        if (isset($init['options'])) {
            foreach ($init['options'] as $o) {
                $o['field_id'] = Field::firstOrCreate(['title' => $o['field']])->id;
                $options[] = Option::firstOrCreate(['name' => $o['name']], $o)->id;
            }
        }
        if (isset($init['types'])) {
            foreach ($init['types'] as $t) {
                $type = Type::firstOrCreate(['slug' => $t['slug']], $t);
                if (isset($t['options']) && is_array($t['options'])) {
                    foreach ($t['options'] as $k_to => $v_to) {
                        $id_option = Option::where(['name' => $k_to])->first()->id;
                        if ($id_option) {
                            $opt[$id_option] = ['value' => $v_to];
                        }
                    }
                    $type->options()->sync($opt);
                }
                if (isset($t['posts']) && is_array($t['posts'])) {
                    foreach ($t['posts'] as $po) {
                        $po['type_id'] = $type->id;
                        $po['view'] = $type->view . '/' . $po['view'];
                        $po['user_id'] = Auth::user()->id;
                        $type_post = Post::firstOrCreate(['slug' => $po['slug']], $po);
                    }
                }
            }
        }
    }

}
