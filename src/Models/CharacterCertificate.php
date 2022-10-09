<?php


namespace Teddy9110\Seat\WHTools\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterCertificate extends Model
{
    public $timestamps = true;

    protected $primaryKey = 'id';

    protected $table = 'whtools-characterCertificates';

    protected $fillable = ['id', 'character_id', 'character_name', 'certID', 'cert_name', 'rank'];

    public function certificate()
    {
        return $this->hasOne('Teddy9110\Seat\WHTools\Models\Certificate', 'certID', 'certID');
    }

    public function character()
    {
        return $this->hasOne(Seat\Eveapi\Models\Character\CharacterInfo::class, 'character_id', 'character_id');
    }
}