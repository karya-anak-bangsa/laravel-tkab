<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServicesFeatures extends Model
{

    # -------------------------------------------------------------------------- #
    # CUSTOM TABLE                                                               #
    # -------------------------------------------------------------------------- #
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_services_features';
    protected $primaryKey   = 'id_services_features';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;


    # -------------------------------------------------------------------------- #
    # Mass Assignment                                                            #
    # -------------------------------------------------------------------------- #
    protected $fillable = [
        'id_services',
        'features',
        'sort_order',
        'status_data',
    ];

    # ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    # ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];


    # -------------------------------------------------------------------------- #
    # CONSTANTS + SCOPES                                                         #
    # -------------------------------------------------------------------------- #
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status_data', 'Active');
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order', 'asc');
    }


    # -------------------------------------------------------------------------- #
    # RELATIONSHIP                                                               #
    # -------------------------------------------------------------------------- #
    public function service(): BelongsTo
    {
        return $this->belongsTo(Services::class, 'id_services', 'id_services');
    }
}
