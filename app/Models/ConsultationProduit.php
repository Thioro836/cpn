<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConsultationProduit
 * 
 * @property int $id_produit
 * @property int $id_consultation
 * @property int $quantite
 * 
 * @property Consultation $consultation
 * @property Produit $produit
 *
 * @package App\Models
 */
class ConsultationProduit extends Model
{
	protected $table = 'consultation_produit';
	public $incrementing = false;
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'id_produit' => 'int',
		'id_consultation' => 'int',
		'quantite' => 'int'
	];

	protected $fillable = [
		'quantite'
	];

	public function consultation()
	{
		return $this->belongsTo(Consultation::class, 'id_consultation');
	}

	public function produit()
	{
		return $this->belongsTo(Produit::class, 'id_produit');
	}
}
