<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 *
 * @property int $id_patient
 * @property string $nom_patient
 * @property string $prenom_patient
 * @property int|null $age_patient
 * @property string $adresse_patient
 * @property string $secteur_patient
 * @property string $profession_patient
 * @property string $telephone_patient
 * @property string|null $nom_mari
 * @property string|null $prenom_mari
 * @property string|null $adresse_mari
 * @property string|null $secteur_mari
 * @property string|null $profession_mari
 * @property string|null $telephone_mari
 *
 * @property Collection|DossierPatient[] $dossierPatients
 *
 * @package App\Models
 */
class Patient extends Model
{
	protected $table = 'patient';
	protected $primaryKey = 'id_patient';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'age_patient' => 'int'
	];

	protected $fillable = [
		'nom_patient',
		'prenom_patient',
		'age_patient',
		'adresse_patient',
		'secteur_patient',
		'profession_patient',
		'telephone_patient',
		'nom_mari',
		'prenom_mari',
		'adresse_mari',
		'secteur_mari',
		'profession_mari',
		'telephone_mari'
	];

    public function nomComplet()
	{
		return "{$this->prenom_patient} {$this->nom_patient}";
	}

	public function dossierPatients()
	{
		return $this->hasMany(DossierPatient::class, 'id_patient');
	}
}
