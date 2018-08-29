<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Pusher;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pusher(Request $request){

      $options = array(
        'cluster' => 'ap1',
        'useTLS' => false
      );
      $pusher = new Pusher\Pusher(
        '0ed9d481e4c6b4057ba0',
        '4bcaf4d514124e13cdca',
        '587665',
        $options
      );

      $data['message'] = 'hello world';
      $pusher->trigger('my-channelt', 'my-eventt', $data);

    }

    //
}
