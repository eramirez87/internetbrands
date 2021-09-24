<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $table = 'Items';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
        'amount',
    ];

    static function getAll(){
        return Items::get();
    }
    function getById($id){
        return Items::where('id',$id)->first();
    }
    function editById($id,$data){
        return Items::where('id',$id)->update($data);
    }
    function dropById($id){
        return Items::where('id',$id)->delete();
    }
    function saveItem( $data ){
        return Items::insert($data);
    }
}
