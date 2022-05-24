<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class DossierPatientGestation
 *
 * @property int $id_gestation
 * @property int $id_dossier
 * @property string $valeur_gestation
 *
 * @property DossierPatient $dossierPatient
 * @property Gestation $gestation
 *
 * @package App\Models
 */
class DossierPatientGestation extends Model
{
	protected $table = 'dossier_patient_gestation';
	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

    protected $primaryKey = [
        'id_gestation',
		'id_dossier'
    ];

	protected $casts = [
		'id_gestation' => 'int',
		'id_dossier' => 'int'
	];

	protected $fillable = [
		'valeur_gestation',
        'id_gestation',
		'id_dossier'
	];

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}

	public function gestation()
	{
		return $this->belongsTo(Gestation::class, 'id_gestation');
	}

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('id_gestation', '=', $this->getAttribute('id_gestation'))
            ->where('id_dossier', '=', $this->getAttribute('id_dossier'));
        return $query;
    }
}
