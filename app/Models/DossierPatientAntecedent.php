<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    protected $primaryKey = [
        'id_antecedent',
		'id_dossier'
    ];

	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_antecedent' => 'int',
		'id_dossier' => 'int'
	];

	protected $fillable = [
		'valeur_antecedent',
        'id_antecedent',
		'id_dossier'
	];

	public function antecedent()
	{
		return $this->belongsTo(Antecedent::class, 'id_antecedent');
	}

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('id_antecedent', '=', $this->getAttribute('id_antecedent'))
            ->where('id_dossier', '=', $this->getAttribute('id_dossier'));
        return $query;
    }
}
