<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $age
 * @property int    $idregion
 * @property string $cni
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $status
 * @property string $login
 * @property string $pwd
 * @property string $email
 * @property string $etat
 */
class Participant extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'participant';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cni', 'nom', 'prenom', 'telephone', 'age', 'sexe', 'status', 'login', 'pwd', 'email', 'etat', 'idregion'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'cni' => 'string', 'nom' => 'string', 'prenom' => 'string', 'telephone' => 'string', 'age' => 'int', 'status' => 'string', 'login' => 'string', 'pwd' => 'string', 'email' => 'string', 'etat' => 'string', 'idregion' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
