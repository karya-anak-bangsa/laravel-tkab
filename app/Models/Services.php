<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Services extends Model
{


    # -------------------------------------------------------------------------- #
    # CUSTOM TABLE                                                               #
    # -------------------------------------------------------------------------- #
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_services';
    protected $primaryKey   = 'id_services';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    # -------------------------------------------------------------------------- #
    # MASS ASSIGNMENT
    # -------------------------------------------------------------------------- #
    protected $fillable = [
        'icon',
        'category',
        'title',
        'description',
        'tech_stack',
        'slug',
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
    public function servicesFeatures(): HasMany
    {
        return $this->hasMany(ServicesFeatures::class, 'id_services', 'id_services');
    }

    public function activeServicesFeatures(): HasMany
    {
        return $this->hasMany(ServicesFeatures::class, 'id_services', 'id_services')->active()->ordered();
    }
}
