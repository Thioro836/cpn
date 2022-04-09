<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produit
 * 
 * @property int $id_produit
 * @property string $nom_produit
 * 
 * @property Collection|Consultation[] $consultations
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'produit';
	protected $primaryKey = 'id_produit';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $fillable = [
		'nom_produit'
	];

	public function consultations()
	{
		return $this->belongsToMany(Consultation::class, 'consultation_produit', 'id_produit', 'id_consultation')
					->withPivot('quantite');
	}
}
