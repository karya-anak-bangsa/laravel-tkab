<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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

    # -------------------------------------------------------------------------- #
    # MASS ASSIGNMENT
    # -------------------------------------------------------------------------- #
    protected $fillable = [
        'title',
        'description',
        'image',
        'keyword_1',
        'keyword_2',
        'keyword_3',
        'keyword_4',
        'keyword_5',
        'cta_1',
        'cta_2',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    # ...
    protected $attributes = [
        'is_active' => true
    ];

    # ...
    protected $casts = [
        'is_active'     => 'boolean',
        'created_at'    => 'timestamp',
        'updated_at'    => 'timestamp',
        'deleted_at'    => 'timestamp',
    ];


    # -------------------------------------------------------------------------- #
    # HELPERS                                                                    #
    # -------------------------------------------------------------------------- #
    public function keyword(): array
    {
        return array_filter([
            $this->keyword_1,
            $this->keyword_2,
            $this->keyword_3,
            $this->keyword_4,
            $this->keyword_5,
        ]);
    }

    public function cta(): array
    {
        return array_filter([
            $this->cta_1,
            $this->cta_2,
        ]);
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
