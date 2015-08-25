<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model{

    public function stock(){
        return $this->belongsTo('App\Stock');
    }

    public function getAskAttribute($value){
        return $value/100;
    }

    public function getBidAttribute($value){
        return $value/100;
    }
}
