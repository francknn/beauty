<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organisations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class OrganisationsController extends Controller
{

    
    public function index()
    {
        $id = Auth::user()->id;
        $users = DB::table('users')->where('id', '=', $id)->get();
       
      // $users= User::select('name','id')->where('id','=',Auth::user()->id)->get;

        return view('Organisations/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisations.create');
    }
/*
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $request->validate([
         'nom' => 'required',
         'pays' => 'required',
         'ville' => 'required',
         'user_id' => 'required'
       ]);
       $organisations= new Organisations([
        'nom' => $request->get('nom'),
        'pays'=> $request->get('pays'),
        'ville'=> $request->get('ville'),
        'user_id'=> $request->get('user_id')
      ]);
      $organisations['user_id'] = Auth::user()->id;
      $organisations->save();

      return redirect('/main')->with('success', 'Stock has been added');
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\ClientModel  $clientModel
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

        $u_id = Auth::user()->user_id;
        $user = DB::table('users')->where('user_id', '=', $u_id)->get();
        session(['USERS' => $user]);

        // $Entreprises = UserModel::all();
        if($user[0]->role == 1 ){

            $user = DB::table('users')->where('role', '=', '3')->get();
            return view('csl_client', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientModel  $clientModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientModel $clientModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientModel  $clientModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientModel $clientModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientModel  $clientModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientModel $clientModel)
    {
        //
    }
}
