<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DossierPatientAntecedent
 * 
 * @property int $id_antecedent
 * @property int $id_dossier
 * @property string $valeur_antecedent
 * 
 * @property Antecedent $antecedent
 * @property DossierPatient $dossierPatient
 *
 * @package App\Models
 */
class DossierPatientAntecedent extends Model
{
	protected $table = 'dossier_patient_antecedent';
	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_antecedent' => 'int',
		'id_dossier' => 'int'
	];

	protected $fillable = [
		'valeur_antecedent'
	];

	public function antecedent()
	{
		return $this->belongsTo(Antecedent::class, 'id_antecedent');
	}

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}
}
