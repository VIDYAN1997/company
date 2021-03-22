<?php

/*namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function index()
    {
        //
    }
    function add(Request $req)
    {
        $company= new Company;
        $company->cname= $req->input('cname');
        $company->clocation= $req->input('clocation');
        $company->cmobileno= $req->input('cmobileno');
        $company->save();
        return $company;
    }
    function login(Request $req)
    {
        $user= User::where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return ["error"=>false];
        }
        return ["error"=>true];
   
    }
}
<?php*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function add(Request $req)
    {
        $company= new Company;
        $company->cname= $req->input('cname');
        $company->clocation= $req->input('clocation');
        $company->cmobileno= $req->input('cmobileno');
        $company->save();
        return $company;

    }
    function list()
    {
        return Company::all();
    }
    function delete($id)
    {
        $result= Company::where('id',$id)->delete();
        if($result)
        {
            return ["result"=>"company has been delete"];
        }
        else{
            return ["result"=>"Operation failed"];
        }

    }
    function getCompany($id)
    {
        return Company::find($id);
    }
    function updateCompany($id,Request $req)
    {
        //return $req->input();
       // $result= Company::where('cid',$id)->updateCompany();
        $company= Company::find($id);
       
        $company->cname=$req->input('cname');
        $company->clocation= $req->input('clocation');
        $company->cmobileno= $req->input('cmobileno');
        $company->save();
        return $company;
    }
}

