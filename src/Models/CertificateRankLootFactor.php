<?php


namespace Teddy9110\Seat\WHTools\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateRankLootFactor extends Model
{
    public $timestamps = true;

    protected $table = 'whtools-certificates_rank_loot_factor';

    protected $fillable = ['rank', 'factor'];

    public function certificate()
    {
        return $this->hasMany('Teddy9110\Seat\WHTools\Models\Certificate', 'certID', 'certID');
    }

}