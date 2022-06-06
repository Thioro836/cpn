<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultation
 * 
 * @property int $id_consultation
 * @property Carbon $date_consultation
 * @property int $age_gestationnel
 * @property bool $mouvement_percus
 * @property float $poids
 * @property float $haut_uterine
 * @property bool $bruit_coeur
 * @property bool|null $conseling
 * @property float $tension_arterielle
 * @property bool $metorrhagies
 * @property bool $anemie_clinique
 * @property bool $odemes
 * @property bool $infection_urinaire
 * @property bool $perte_fetide
 * @property bool|null $suspicion_bassin_retreci
 * @property bool|null $ca_uc_f_vada
 * @property bool|null $parite
 * @property bool|null $primapare
 * @property bool|null $taille
 * @property bool|null $mn_dn_ed
 * @property bool|null $bw
 * @property bool|null $srv
 * @property float|null $thb
 * @property bool|null $position_transverse
 * @property bool|null $siege
 * @property bool|null $gemellaire
 * @property int $id_dossier
 * 
 * @property DossierPatient $dossierPatient
 * @property Collection|AgentSante[] $agentSantes
 * @property Collection|Produit[] $produits
 * @property Transfert $transfert
 *
 * @package App\Models
 */
class Consultation extends Model
{
	protected $table = 'consultation';
	protected $primaryKey = 'id_consultation';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'age_gestationnel' => 'int',
		'mouvement_percus' => 'bool',
		'poids' => 'float',
		'haut_uterine' => 'float',
		'bruit_coeur' => 'bool',
		'conseling' => 'bool',
		'tension_arterielle' => 'float',
		'metorrhagies' => 'bool',
		'anemie_clinique' => 'bool',
		'odemes' => 'bool',
		'infection_urinaire' => 'bool',
		'perte_fetide' => 'bool',
		'suspicion_bassin_retreci' => 'bool',
		'ca_uc_f_vada' => 'bool',
		'parite' => 'bool',
		'primapare' => 'bool',
		'taille' => 'bool',
		'mn_dn_ed' => 'bool',
		'bw' => 'bool',
		'srv' => 'bool',
		'thb' => 'float',
		'position_transverse' => 'bool',
		'siege' => 'bool',
		'gemellaire' => 'bool',
		'id_dossier' => 'int'
	];

	protected $dates = [
		'date_consultation'
	];

	protected $fillable = [
		'date_consultation',
		'age_gestationnel',
		'mouvement_percus',
		'poids',
		'haut_uterine',
		'bruit_coeur',
		'conseling',
		'tension_arterielle',
		'metorrhagies',
		'anemie_clinique',
		'odemes',
		'infection_urinaire',
		'perte_fetide',
		'suspicion_bassin_retreci',
		'ca_uc_f_vada',
		'parite',
		'primapare',
		'taille',
		'mn_dn_ed',
		'bw',
		'srv',
		'thb',
		'position_transverse',
		'siege',
		'gemellaire',
		'id_dossier'
	];

	public function dossierPatient()
	{
		return $this->belongsTo(DossierPatient::class, 'id_dossier');
	}

	public function agentSantes()
	{
		return $this->belongsToMany(AgentSante::class, 'consultation_agent_sante', 'id_consultation', 'id_agent');
	}

	public function produits()
	{
		return $this->belongsToMany(Produit::class, 'consultation_produit', 'id_consultation', 'id_produit')
					->withPivot('quantite');
	}

	public function transfert()
	{
		return $this->hasOne(Transfert::class, 'id_consultation');
	}
}
