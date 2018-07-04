<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * Model item ads
 */
class Role extends Model
{
  /**
   * Table database
   */
  protected $table = 'roles';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'rolename',
  ];
  /**
   * One to one relationships
   */
  /*public function category()
  {
    return $this->hasOne('App\CategoryAds');
  }*/
}