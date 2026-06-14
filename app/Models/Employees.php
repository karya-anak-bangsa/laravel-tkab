<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employees extends Authenticatable
{
    # -------------------------------------------------------------------------- #
    # CUSTOM TABLE                                                               #
    # -------------------------------------------------------------------------- #
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_employees';
    protected $primaryKey   = 'id_employees';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    # -------------------------------------------------------------------------- #
    # MASS ASSIGNMENT
    # -------------------------------------------------------------------------- #
    protected $fillable = [
        'full_name',
        'role',
        'otp_code',
        'otp_expired_at',
        'otp_verified_at',
        'email',
        'password',
        'status_data',
    ];

    # ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    # ...
    protected $casts = [
        'password'          => 'hashed',
        'otp_expired_at'    => 'datetime',
        'otp_verified_at'   => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
    ];

    # -------------------------------------------------------------------------- #
    # CONSTANTS + SCOPES                                                         #
    # -------------------------------------------------------------------------- #
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status_data', 'Active');
    }

    public function scopeVerified(Builder $query): Builder
    {
        return $query->whereNotNull('otp_verified_at');
    }

    public function scopeUnverified(Builder $query): Builder
    {
        return $query->whereNull('otp_verified_at');
    }

    public function hasOtpVerified(): bool
    {
        // return ! is_null($this->otp_verified_at);
        return isset($this->otp_verified_at);
    }

    public function isOtpExpired(): bool
    {
        if (is_null($this->otp_expired_at)) {
            return true;
        }

        return now()->greaterThan($this->otp_expired_at);
    }
}
