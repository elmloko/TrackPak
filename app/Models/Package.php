<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Package
 *
 * @property $id
 * @property $number_package
 * @property $place_id
 * @property $location_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Package extends Model
{

  static $rules = [
    'number_package' => 'required',
    'place_id' => 'required',
    'location_id' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['number_package', 'place_id', 'location_id'];
  public function place()
  {
    return $this->belongsTo(Place::class);
  }

  public function location()
{
    return $this->belongsTo(Location::class);
}
}
