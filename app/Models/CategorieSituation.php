<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategorieSituation
 *
 * @property int $id_categorie_situation
 * @property string $nom_cat_situation
 *
 * @property Collection|Situation[] $situations
 *
 * @package App\Models
 */
class CategorieSituation extends Model
{
	protected $table = 'categorie_situation';
	protected $primaryKey = 'id_categorie_situation';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $fillable = [
		'nom_cat_situation'
	];

	public function situations()
	{
		return $this->hasMany(Situation::class, 'id_categorie_situation');
	}
}
