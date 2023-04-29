<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int    $id
 * @property int    $idvote
 * @property Date   $date_election
 * @property string $label
 * @property string $description
 * @property string $statut
 */
class Election extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use HasFactory;
    protected $table = 'election';

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
        'date_election', 'label', 'description', 'statut', 'idvote'
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
        'id' => 'int', 'date_election' => 'date', 'label' => 'string', 'description' => 'string', 'statut' => 'string', 'idvote' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_election'
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
