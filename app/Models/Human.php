<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Human extends Model
{
	use HasFactory;

	use SoftDeletes;

	protected $table = 'my_flights';

	protected $primaryKey = 'flight_id';

	public $timestamps = false;

	const CREATED_AT = 'creation_date';
	const UPDATED_AT = 'updated_date';

	protected $fillable = ['name'];
}
