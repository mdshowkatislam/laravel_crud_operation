<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\UserService;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $var = null)
    {
        $this->userService = $var;
    }

    
   
    public function index()
    {
        $data['users'] = $this->userService->getAllUser();
        return view('all-users', $data);
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
        dd("store");
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData'] = $this->userService->getUserById($id);
        return view('one-user', $data);
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
        $data = $this->userService->getUserById($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => "required",
            'confirm_password' => "required|same:password"

        ]);
     
        $data->name = $request->name;
        $data->email = $request->email;
        $data->email_verified_at = date('Y-m-d H:i:s');
        $data->password = bcrypt($request->password);

        $data->save();
        return redirect()->route('all_users')->with('sucees', 'user updated');
    

    }

   
    public function destroy($id)
    {
        //
    }

  
}
