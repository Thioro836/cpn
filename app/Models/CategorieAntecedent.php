<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategorieAntecedent
 * 
 * @property int $id_categorie_antecedent
 * @property string $nom_cat_antecedent
 * 
 * @property Collection|Antecedent[] $antecedents
 *
 * @package App\Models
 */
class CategorieAntecedent extends Model
{
	protected $table = 'categorie_antecedent';
	protected $primaryKey = 'id_categorie_antecedent';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $fillable = [
		'nom_cat_antecedent'
	];

	public function antecedents()
	{
		return $this->hasMany(Antecedent::class, 'id_categorie_antecedent');
	}
}
