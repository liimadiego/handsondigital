<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['guard_name' => 'web', 'name' => 'Categorias']);
        Permission::create(['guard_name' => 'web', 'name' => 'Arquivos']);
        Permission::create(['guard_name' => 'web', 'name' => 'Cursos']);
        //\App\Models\User::factory(10)->create();
    }
}
