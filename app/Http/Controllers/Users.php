<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\account_data;
use Auth;
use File;
// use Intervention\Image\Facades\Image as Image;
// use Image;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = account_data::orderBy('id', 'desc')->first();
      $ages = account_data::avg('age');
      // $users = DB::table('users')->where('login', 'Nikita')->first();
        return view('second_page')->with('users', $users)->with('ages', $ages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $account_data = new account_data;
      $account_data->login = $request->login;
      $account_data->name = $request->name;
      $account_data->password = $request->password;
      $account_data->age = $request->age;
      $account_data->save();
       return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function profile ()
    {
      return view('profile', array('user' => Auth::user()));
    }


    public function avatar (Request $request)
    {

      if($request->hasFile('avatar')) {
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        $avatar->move(public_path().'/uploads', $filename);
          $user = Auth::user();
          $getImg = $user->avatar;
          if (File::exists($getImg)) {
            // File::delete($getImg);
              unlink($getImg);
          }
          $url = URL::to("/") . '/uploads/' . $filename;
          // unlink(public_path($getImage));
          $user->avatar = $url;
          $user->save();
          // return $url;
          return view('profile')->with('user', Auth::user());

      } else {
        return 'no';
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
