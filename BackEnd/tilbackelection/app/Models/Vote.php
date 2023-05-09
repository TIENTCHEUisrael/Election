<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * @property int  $id
 * @property int  $idBulletin
 * @property int  $idElection
 * @property int  $idParticipant
 * @property int  $created_at
 * @property int  $updated_at
 * @property string $date_election
 */
class Vote extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use HasFactory;
    protected $table = 'vote';

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
        'date_election', 'created_at', 'updated_at','idElection','idParticipant','idBulletin'
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
        'id' => 'int', 'date_election' => 'string', 'idBulletin'=> 'int','idElection'=> 'int','idParticipant'=> 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
