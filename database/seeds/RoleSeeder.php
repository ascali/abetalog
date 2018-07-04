<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class RoleSeeder extends Seeder {
    public function run()
    {
        DB::table('roles')->delete();
        $role = app()->make('App\Role');
        $role->fill(['rolename' => 'Administrator']);
        $role->save();
    }
}