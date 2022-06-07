<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Situation
 *
 * @property int $id_situattion
 * @property int $numero
 * @property string $sexe_enfant
 * @property bool $vivant
 * @property int $age_enfant
 * @property string|null $cause_deces
 * @property int $id_dossier
 * @property int $id_categorie_situation
 *
 * @property CategorieSituation $categorieSituation
 * @property DossierPatient $dossierPatient
 *
 * @package App\Models
 */
class Situation extends Model
{
	protected $table = 'situation';
	protected $primaryKey = 'id_situattion';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'numero' => 'int',
		'vivant' => 'bool',
		'age_enfant' => 'int',
		'id_dossier' => 'int',
		'id_categorie_situation' => 'int'
	];

	protected $fillable = [
		'numero',
		'sexe_enfant',
		'vivant',
		'age_enfant',
		'cause_deces',
		'id_dossier',
		'id_categorie_situation'
	];

	public function categorieSituation()
	{
		return $this->belongsTo(CategorieSituation::class, 'id_categorie_situation');
	}

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}
}
