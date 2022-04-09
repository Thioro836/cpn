<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgentSante
 * 
 * @property int $id_agent
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string $email
 * @property string $telephone
 * @property string $qualification
 * @property string $password
 * 
 * @property Collection|Consultation[] $consultations
 *
 * @package App\Models
 */
class AgentSante extends Model
{
	protected $table = 'agent_sante';
	protected $primaryKey = 'id_agent';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'adresse',
		'email',
		'telephone',
		'qualification',
		'password'
	];

	public function consultations()
	{
		return $this->belongsToMany(Consultation::class, 'consultation_agent_sante', 'id_agent', 'id_consultation');
	}
}
