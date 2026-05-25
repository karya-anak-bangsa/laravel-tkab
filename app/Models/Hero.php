<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hero extends Model
{

    # -------------------------------------------------------------------------- #
    # CUSTOM TABLE                                                               #
    # -------------------------------------------------------------------------- #
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_hero';
    protected $primaryKey   = 'id_hero';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;


    # -------------------------------------------------------------------------- #
    # MASS ASSIGNMENT
    # -------------------------------------------------------------------------- #
    protected $fillable = [
        'title',
        'description',
        'image',
        'keywords_1',
        'keywords_2',
        'keywords_3',
        'keywords_4',
        'keywords_5',
        'cta_1',
        'cta_2',
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
    # CONSTANTS                                                                  #
    # -------------------------------------------------------------------------- #
    const STATUS_ACTIVE     = 'Active';
    const STATUS_NOT_ACTIVE = 'Not Active';


    # -------------------------------------------------------------------------- #
    # SCOPES                                                                     #
    # -------------------------------------------------------------------------- #
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status_data', self::STATUS_ACTIVE);
    }


    # -------------------------------------------------------------------------- #
    # ACCESSOR                                                                   #
    # -------------------------------------------------------------------------- #
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->image
                ? asset('storage/' . $this->image)
                : asset('storage/hero/dummy/hero-1.png'),
        );
    }
}
