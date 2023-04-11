<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Place
 *
 * @property $id
 * @property $name_place
 * @property $created_at
 * @property $updated_at
 *
 * @property Package[] $packages
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Place extends Model
{
    
    static $rules = [
		'name_place' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_place'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function package()
    {
        return $this->hasMany('App\Models\Package', 'place_id', 'id');
    }
    

}
