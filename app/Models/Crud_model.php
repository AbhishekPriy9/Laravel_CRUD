<?php
 
namespace App\Models;
use DB;
 
use Illuminate\Database\Eloquent\Model;
 
class Crud_model extends Model
{
    //die("===============");
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image',
    ];
    
    
    
    
    
    public function all1(){
    
          return DB::table('users')->get();
          }
    
    
    
    
    
    
    
}