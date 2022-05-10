<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Throwable;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ConsultController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = UserModel::query()->get();
        return view('index')
            ->with('users',$users);
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

    public function store(Request $request)
    {   
        $userConsult = $request->input('user');
        $url = "https://api.github.com/users/" ;
        $client = new Client(['verify' => false]);
        try{
            $response = $client->request('GET', $url.$userConsult);
            $responseJson = (array) json_decode($response->getBody());
            $userVerified = new UserModel();
            $userVerified->fill($responseJson);
            $userVerified->save();

            return redirect('/');
        }catch( Throwable $e ){
            return redirect('/');
        }

        return redirect('/');;
        
    }

    public function deleteUser(int $id)
    {
        UserModel::where('id',$id)->delete();
        return redirect('/');
    }

    public function callUserPage(int $id)
    {   
        $user = UserModel::where('id',$id)->get();
        return view('userPage')
            ->with('user',$user[0]);
    }
}
