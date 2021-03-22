<?php

/*namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{ 
  public $table= "company";
    use  HasFactory;
    //use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $fillable = [
        'cname',
        'clocation',
        'cmobileno',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'password',
        'remember_token',
    ];*/
    /*public $timestamps=false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   /* protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];*/
//}

//<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = "company";
    //use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    
  
    protected $fillable = [
        'cname',
        'clocation',
        'cmobileno',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   /* protected $hidden = [
        'password', 'remember_token',
    ]; */
    //public $timestamps=false;
     

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  
}



