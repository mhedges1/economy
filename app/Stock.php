<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model{

    public function history(){
        return $this->hasMany('App\StockHistory');
    }

    public function getAskAttribute($value){
        return $value/100;
    }

    public function getBidAttribute($value){
        return $value/100;
    }
}
