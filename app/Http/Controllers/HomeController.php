<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $x=DB::table('companies')->get();

        return view('home',compact('x'));
    }

    public function create(){
    return view('company.create');
    }

    public function store(Request $rk){



        $val_data=$rk->validate([
            'name'=>'required|max:100',
            'email'=>'required|email:rfc,dns|max:100|unique:users',
            'address'=>'required|max:100',
            'link'=>'required',
            // 'image'=>'required|mimes:jpg,png,gif,jpeg',


        ]);

        if($val_data){
              Company::create($rk->all());
              return redirect('/home')->with('success');
        }

    return redirect()->back()->withInpute()->with('errors',"date insert problem");
    }

    public function edit($id){

           $e_data=Company::find($id);



        return view('company.edit',compact('e_data'));

    }
    public function update(Request $rk,$id){


        $val_data=$rk->validate([
            'name'=>'required|max:100',
            'email'=>'required|email:rfc,dns|max:100|unique:users',
            'address'=>'required|max:100',
            'link'=>'required',
            // 'image'=>'required|mimes:jpg,png,gif,jpeg',


        ]);

        if($val_data){
            $company_to_update=Company::find($id);

            $company_to_update->update($rk->all());
              return redirect('/home')->with('success');
        }

    return redirect()->back()->withInpute()->with('errors',"date update problem");
}

        public function view($id){
            // dd($id);
            $view_data=Company::find($id);

            return view("company.view",compact('view_data'));
        }

public function destroy($id){

    $d_data=Company::find($id);

    if($d_data){
       $d_data->delete();
       return redirect('/home')->with('success', 'Post deleted successfully');
    }
    return redirect()->back()->with('errors','deletion problem');
}
}
