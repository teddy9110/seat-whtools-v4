<?php

namespace Teddy9110\Seat\WHTools\Models;

use Illuminate\Database\Eloquent\Model;
use Seat\Web\Models\Acl\Role;
use Teddy9110\Seat\WHTools\Models\WHTools;

class Doctrine extends Model
{
    public $timestamps = true;

    protected $table = 'seat_doctrine';

    protected $fillable = ['id', 'name', 'role_id'];

    public function fittings()
    {
        return $this->belongsToMany(Fitting::class, 'seat_doctrine_fitting', 'doctrine_id', 'fitting_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'seat_doctrine_role');
    }

}
