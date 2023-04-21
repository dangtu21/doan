<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    protected $fillable = ['id','category_id','title','discount','price','thumbnail','description','created_at','updated_at','deleted'];
    function sub_product(){
        return $this->hasMany('App\product','parent_id');
    }
}