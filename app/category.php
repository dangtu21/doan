<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
    protected $fillable = ['id','name'];
    function sub_product(){
        return $this->hasMany('App\category','parent_id');
    }
}