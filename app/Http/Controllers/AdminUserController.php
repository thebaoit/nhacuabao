<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Auth;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	if (!Auth::check()) 
    	{
    		$inputs = Input::all();
    		if(isset($inputs['submit']))
    		{
    			$remember = 0;
    			$email = $inputs['email'];
    			$password = $inputs['password'];
    			if(isset($inputs['remember']))
    				$remember = $inputs['remember'];

    			if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) 
    			{
    				return redirect('admin');
    			}
    			else
    			{
    				return redirect('admin/login');
    			}
    		}
    		else 
    		{
    			return view('admintpl.login');
    		}
    	}
    	else
    	{
    		return redirect('admin');
    	}
    }

    public function getLogout()
    {
    	Auth::logout();
		return redirect('');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
