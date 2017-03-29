<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);

        $fields = [
                ['title' => 'text'],
                ['title' => 'textarea'],
                ['title' => 'password'],
                ['title' => 'checkbox'],
                ['title' => 'radio'],
                ['title' => 'color'],
                ['title' => 'date'],
                ['title' => 'datetime-local'],
                ['title' => 'email'],
                ['title' => 'month'],
                ['title' => 'number'],
                ['title' => 'range'],
                ['title' => 'search'],
                ['title' => 'tel'],
                ['title' => 'time'],
                ['title' => 'url'],
                ['title' => 'week'],
                ['title' => 'select'],
                ['title' => 'datalist'],
                ['title' => 'file'],
                ['title' => 'gallery']
        ];
        foreach ($fields as $field) {
            DB::table('fields')->insert($field);
        }

        $options = [
                ['label' => 'option.meta_title', 'name' => 'meta_title', 'field_id' => 1],
                ['label' => 'option.meta_description', 'name' => 'meta_description', 'field_id' => 2],
                ['label' => 'option.meta_keywords', 'name' => 'meta_keywords', 'field_id' => 1],
                ['label' => 'option.meta_author', 'name' => 'meta_author', 'field_id' => 1]
        ];
        foreach ($options as $option) {
            DB::table('options')->insert($option);
        }

        $users = [
                ['name' => 'Administrador', 'email' => 'admin@cw-cms.com', 'password' => bcrypt('secret'), 'remember_token' => str_random(10)]
        ];
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }

        $roles = [
                ['slug' => 'administrator', 'label' => 'Administrator'],
                ['slug' => 'manager', 'label' => 'Manager'],
                ['slug' => 'user', 'label' => 'User'],
                ['slug' => 'crm_user', 'label' => 'CRM User']
        ];
        foreach ($roles as $role) {
            DB::table('roles')->insert($role);
        }

        $user_roles = [
                ['role_id' => 1, 'user_id' => 1]
        ];
        foreach ($user_roles as $user_role) {
            DB::table('role_user')->insert($user_role);
        }

        /*         * * Monta as permissions basicas do sistema (Admin) * * */
        $per_basic = ['show', 'create', 'edit', 'destroy'];
        $per_contr = ['dashboard', 'user', 'role', 'permission', 'gallery', 'config', 'crm'];
        foreach ($per_contr as $c) {
            foreach ($per_basic as $b) {
                $permissions[] = [
                    'slug' => 'admin-' . $c . '-' . $b,
                    'label' => 'admin.' . $c . '.' . $b
                ];
            }
        }
        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        }

        $types = [
                ['title' => 'type.pages', 'slug' => 'pages', 'description' => 'Site pages']
        ];
        foreach ($types as $type) {
            DB::table('types')->insert($type);
        }

        $option_types = [
                ['type_id' => 1, 'option_id' => 1],
                ['type_id' => 1, 'option_id' => 2],
                ['type_id' => 1, 'option_id' => 3],
                ['type_id' => 1, 'option_id' => 4]
        ];
        foreach ($option_types as $option_type) {
            DB::table('option_type')->insert($option_type);
        }

        $posts = [
                ['type_id' => 1, 'user_id' => 1, 'title' => 'Home', 'slug' => '/', 'content' => 'Home Page'],
                ['type_id' => 1, 'user_id' => 1, 'title' => 'About', 'slug' => 'about', 'content' => 'About'],
                ['type_id' => 1, 'user_id' => 1, 'title' => 'Contact', 'slug' => 'contact', 'content' => 'Contact']
        ];
        foreach ($posts as $post) {
            DB::table('posts')->insert($post);
        }

        $option_posts = [
                ['option_id' => 1, 'post_id' => 1, 'value' => 'Home Page'],
                ['option_id' => 2, 'post_id' => 1, 'value' => 'Home Page'],
                ['option_id' => 3, 'post_id' => 1, 'value' => 'Home Page'],
                ['option_id' => 4, 'post_id' => 1, 'value' => 'Home Page'],
                ['option_id' => 1, 'post_id' => 2, 'value' => 'About'],
                ['option_id' => 2, 'post_id' => 2, 'value' => 'About'],
                ['option_id' => 3, 'post_id' => 2, 'value' => 'About'],
                ['option_id' => 4, 'post_id' => 2, 'value' => 'About'],
                ['option_id' => 1, 'post_id' => 3, 'value' => 'Contact'],
                ['option_id' => 2, 'post_id' => 3, 'value' => 'Contact'],
                ['option_id' => 3, 'post_id' => 3, 'value' => 'Contact'],
                ['option_id' => 4, 'post_id' => 3, 'value' => 'Contact']
        ];
        foreach ($option_posts as $option_post) {
            DB::table('option_post')->insert($option_post);
        }

        /* Cria os diretorios para pages */
        if (!is_dir(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
        }
        if (!is_dir(public_path('uploads/pages'))) {
            mkdir(public_path('uploads/pages'), 0777);
        }

        $themes = [
                ['title' => 'Default', 'slug' => 'default']
        ];
        foreach ($themes as $theme) {
            DB::table('themes')->insert($theme);
        }

        $sites = [
                ['title' => 'Web Site', 'theme_id' => 1]
        ];
        foreach ($sites as $site) {
            DB::table('sites')->insert($site);
        }
    }

}
