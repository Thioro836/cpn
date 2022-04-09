<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsultationAgentSante
 * 
 * @property int $id_agent
 * @property int $id_consultation
 * 
 * @property AgentSante $agentSante
 * @property Consultation $consultation
 *
 * @package App\Models
 */
class ConsultationAgentSante extends Model
{
	protected $table = 'consultation_agent_sante';
	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_agent' => 'int',
		'id_consultation' => 'int'
	];

	public function agentSante()
	{
		return $this->belongsTo(AgentSante::class, 'id_agent');
	}

	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'id_consultation');
	}
}
