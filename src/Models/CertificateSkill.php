<?php


namespace Teddy9110\Seat\WHTools\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateSkill extends Model
{
    public $timestamps = true;
    protected $primaryKey = 'skillID';

    protected $table = 'whtools-certificates_skills';

    protected $fillable = ['skillID', 'requiredLvl', 'certRank'];

    public function certificates()
    {
        return $this->hasMany('Teddy9110\Seat\WHTools\Models\Certificate', 'certID', 'certID');
    }
}