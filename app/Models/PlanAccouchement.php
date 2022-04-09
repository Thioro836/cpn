<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PlanAccouchement
 * 
 * @property int $id_accouchement
 * @property string $lieu_accouchement
 * @property string $moyens_transport
 * @property string $personne_responsable
 * @property string $accompagant
 * @property int $id_dossier
 * 
 * @property DossierPatient $dossierPatient
 *
 * @package App\Models
 */
class PlanAccouchement extends Model
{
	protected $table = 'plan_accouchement';
	protected $primaryKey = 'id_accouchement';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_dossier' => 'int'
	];

	protected $fillable = [
		'lieu_accouchement',
		'moyens_transport',
		'personne_responsable',
		'accompagant',
		'id_dossier'
	];

	public function dossierPatient()
	{
		return $this->hasOne(DossierPatient::class, 'id_accouchement');
	}
}
