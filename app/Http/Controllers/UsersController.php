<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }



    public function insert(Request $request){
    $this->validate($request, [
         'Fname'=>'required',
         'Lname'=>'required',
         'bday'=>'required',
         'email'=>'required',
         'password'=>'required'
    ]);
   $users = Users::where('email', '=', $request->input('email'))->first();
   if ($users === null) {
  
    $account = new Users;
    $account->Fname=$request->input('Fname');
    $account->Lname=$request->input('Lname');
    $account->bday=$request->input('bday');
    $account->email=$request->input('email');
    $password = $request->input('password');// password is form field
    $hashed = Hash::make($password);
    $account->password=$hashed;
    //$account->is_admin="No";
    $account->save();
    // $d = new \stdClass();
    // $d->sender='Grades Calculated';
    // $d->receiver= $account->Fname;
    // Mail::to($account->email)->send(new GradesCalculated($d));
          


return view('login');
} else { return redirect()->back()->with('info','User with this email exits!');
  // User exits
}
        
}

}
