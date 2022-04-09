<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DossierPatientVaccin
 * 
 * @property int $id_vaccin
 * @property int $id_dossier
 * @property Carbon $date_vaccination
 * @property Carbon $date_prochain_rdv
 * 
 * @property DossierPatient $dossierPatient
 * @property Vaccin $vaccin
 *
 * @package App\Models
 */
class DossierPatientVaccin extends Model
{
	protected $table = 'dossier_patient_vaccin';
	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_vaccin' => 'int',
		'id_dossier' => 'int'
	];

	protected $dates = [
		'date_vaccination',
		'date_prochain_rdv'
	];

	protected $fillable = [
		'date_vaccination',
		'date_prochain_rdv'
	];

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}

	public function vaccin()
	{
		return $this->belongsTo(Vaccin::class, 'id_vaccin');
	}
}
