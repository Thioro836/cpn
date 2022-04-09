<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaccin
 * 
 * @property int $id_vaccin
 * @property string $nom_vaccin
 * @property string $periodicite
 * 
 * @property Collection|DossierPatient[] $dossierPatients
 *
 * @package App\Models
 */
class Vaccin extends Model
{
	protected $table = 'vaccin';
	protected $primaryKey = 'id_vaccin';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $fillable = [
		'nom_vaccin',
		'periodicite'
	];

	public function dossierPatients()
	{
		return $this->belongsToMany(DossierPatient::class, 'dossier_patient_vaccin', 'id_vaccin', 'id_dossier')
					->withPivot('date_vaccination', 'date_prochain_rdv');
	}
}
