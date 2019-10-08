<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = new Role();
        $admin_role->name = 'admin';
        $admin_role->description = 'An Admin user';
        $admin_role->save();
    }
}
