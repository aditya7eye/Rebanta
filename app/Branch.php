<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'branch';
    public $timestamps = false;
}
