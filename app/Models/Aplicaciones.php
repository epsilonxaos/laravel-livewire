<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicaciones extends Model
{
	use HasFactory;
	protected $table = 'usuario.aplicaciones';
	protected $primaryKey = 'id';
	protected $fillable = [
		"activo",
		"fecha_creacion",
		"fecha_modificacion",
		"nombre",
		"url"
	];
}
