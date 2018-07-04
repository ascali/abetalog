<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        $user = app()->make('App\User');
        $hasher = app()->make('hash');
        $password = $hasher->make('password');
        $api_token = sha1(time());
        $user->fill([
          'role_id'=>1,
          'username'=>'Ascaliko',
          'email'=>'ascaliko7@gmail.com',
          'password'=>$password,
          'api_token'=>$api_token
        ]);
        $user->save();
    }
}