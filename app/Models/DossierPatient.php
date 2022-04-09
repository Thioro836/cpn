<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DossierPatient
 * 
 * @property int $id_dossier
 * @property string $numero_dossier
 * @property Carbon $date_enregistrement
 * @property Carbon|null $date_derniere_regle
 * @property int|null $dure_cycle
 * @property string $lieu_accouchement
 * @property Carbon|null $date_accouchement
 * @property bool $hadicap_pysique
 * @property string $groupe_sanguin
 * @property float $taille_patiente
 * @property float $dap
 * @property int $id_patient
 * @property int $id_accouchement
 * 
 * @property Patient $patient
 * @property PlanAccouchement $planAccouchement
 * @property Collection|Consultation[] $consultations
 * @property Collection|Antecedent[] $antecedents
 * @property Collection|Gestation[] $gestations
 * @property Collection|Vaccin[] $vaccins
 * @property Collection|RendezVou[] $rendezVous
 * @property Collection|Situation[] $situations
 *
 * @package App\Models
 */
class DossierPatient extends Model
{
	protected $table = 'dossier_patient';
	protected $primaryKey = 'id_dossier';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'dure_cycle' => 'int',
		'hadicap_pysique' => 'bool',
		'taille_patiente' => 'float',
		'dap' => 'float',
		'id_patient' => 'int',
		'id_accouchement' => 'int'
	];

	protected $dates = [
		'date_enregistrement',
		'date_derniere_regle',
		'date_accouchement'
	];

	protected $fillable = [
		'numero_dossier',
		'date_enregistrement',
		'date_derniere_regle',
		'dure_cycle',
		'lieu_accouchement',
		'date_accouchement',
		'hadicap_pysique',
		'groupe_sanguin',
		'taille_patiente',
		'dap',
		'id_patient',
		'id_accouchement'
	];

	public function patient()
	{
		return $this->belongsTo(Patient::class, 'id_patient');
	}

	public function planAccouchement()
	{
		return $this->hasOne(PlanAccouchement::class, 'id_dossier');
	}

	public function consultations()
	{
		return $this->hasMany(Consultation::class, 'id_dossier');
	}

	public function antecedents()
	{
		return $this->belongsToMany(Antecedent::class, 'dossier_patient_antecedent', 'id_dossier', 'id_antecedent')
					->withPivot('valeur_antecedent');
	}

	public function gestations()
	{
		return $this->belongsToMany(Gestation::class, 'dossier_patient_gestation', 'id_dossier', 'id_gestation')
					->withPivot('valeur_gestation');
	}

	public function vaccins()
	{
		return $this->belongsToMany(Vaccin::class, 'dossier_patient_vaccin', 'id_dossier', 'id_vaccin')
					->withPivot('date_vaccination', 'date_prochain_rdv');
	}

	public function rendezVous()
	{
		return $this->hasMany(RendezVou::class, 'id_dossier');
	}

	public function situations()
	{
		return $this->hasMany(Situation::class, 'id_dossier');
	}
}
