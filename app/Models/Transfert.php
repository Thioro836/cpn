<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transfert
 * 
 * @property int $id_transfert
 * @property Carbon $date_transfert
 * @property bool|null $cpc
 * @property bool|null $reference_immediate
 * @property string $cpc_traitement
 * @property int $id_consultation
 * 
 * @property Consultation $consultation
 *
 * @package App\Models
 */
class Transfert extends Model
{
	protected $table = 'transfert';
	protected $primaryKey = 'id_transfert';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'cpc' => 'bool',
		'reference_immediate' => 'bool',
		'id_consultation' => 'int'
	];

	protected $dates = [
		'date_transfert'
	];

	protected $fillable = [
		'date_transfert',
		'cpc',
		'reference_immediate',
		'cpc_traitement',
		'id_consultation'
	];

	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'id_consultation');
	}
}
