<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Antecedent
 * 
 * @property int $id_antecedent
 * @property string $nom
 * @property int $id_categorie_antecedent
 * 
 * @property CategorieAntecedent $categorieAntecedent
 * @property Collection|DossierPatient[] $dossierPatients
 *
 * @package App\Models
 */
class Antecedent extends Model
{
	protected $table = 'antecedent';
	protected $primaryKey = 'id_antecedent';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_categorie_antecedent' => 'int'
	];

	protected $fillable = [
		'nom',
		'id_categorie_antecedent'
	];

	public function categorieAntecedent()
	{
		return $this->belongsTo(CategorieAntecedent::class, 'id_categorie_antecedent');
	}

	public function dossierPatients()
	{
		return $this->belongsToMany(DossierPatient::class, 'dossier_patient_antecedent', 'id_antecedent', 'id_dossier')
					->withPivot('valeur_antecedent');
	}
}
