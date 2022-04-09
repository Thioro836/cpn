<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gestation
 * 
 * @property int $id_gestation
 * @property string $nom_gestation
 * 
 * @property Collection|DossierPatient[] $dossierPatients
 *
 * @package App\Models
 */
class Gestation extends Model
{
	protected $table = 'gestation';
	protected $primaryKey = 'id_gestation';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $fillable = [
		'nom_gestation'
	];

	public function dossierPatients()
	{
		return $this->belongsToMany(DossierPatient::class, 'dossier_patient_gestation', 'id_gestation', 'id_dossier')
					->withPivot('valeur_gestation');
	}
}
