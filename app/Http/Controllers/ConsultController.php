<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

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

        $response = $client->request('GET', $url.$userConsult);
        if($response->getStatusCode() === 200){
            $responseJson = json_decode($response->getBody());
            $userVerified = new UserModel();
            $userVerified->name = $responseJson->{'name'};
            $userVerified->login = $responseJson->{'login'};
            $userVerified->avatar_url = $responseJson->{'avatar_url'};
            $userVerified->public_repos = $responseJson->{'public_repos'};
            $userVerified->followers = $responseJson->{'followers'};
            $userVerified->followings = $responseJson->{'following'};
            $userVerified->timestamps = false;
            
            
            $userVerified->save();
        }
        $users = UserModel::query()->get();
        return redirect('/');
        
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
