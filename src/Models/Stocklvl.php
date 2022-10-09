<?php

namespace Teddy9110\Models\Stocklvl;

use Illuminate\Database\Eloquent\Model;

class Stocklvl extends Model
{
    public $timestamps = true;

    protected $table = 'whtools_stocklvls';

    protected $fillable = ['id', 'minLvl', 'fitting_id'];


    public function fitting()
    {
        return $this->hasOne('Teddy9110\Seat\WHTools\Models\WHTools', 'id', 'fitting_id');
    }
}
