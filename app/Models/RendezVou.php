<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RendezVou
 * 
 * @property int $id_rendez_vous
 * @property Carbon $date_rendez_vous
 * @property int $id_dossier
 * 
 * @property DossierPatient $dossierPatient
 *
 * @package App\Models
 */
class RendezVou extends Model
{
	protected $table = 'rendez_vous';
	protected $primaryKey = 'id_rendez_vous';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_dossier' => 'int'
	];

	protected $dates = [
		'date_rendez_vous'
	];

	protected $fillable = [
		'date_rendez_vous',
		'id_dossier'
	];

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}
}
