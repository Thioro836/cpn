<?php
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;


function send_sms($telephone, $message){
	$client = SMSClient::getInstance('vvDM0A7NvZaJ9EM6hUvUbuD5uFXO9zA6', 'FDUZdIJcSDh412Bs');
	$sms = new SMS($client);
	$sms->message($message)
    ->from('+224629901136')
    ->to($telephone)
    ->send();
}

function page_1(){
    return [
        'mouvement_percus' => "Mouvement perçus ?",
        'bruit_coeur' => "Bruit du coeur ?",
        'conseling' => "Conseling ?"

    ];
}
function page_2(){
    return [
        'metorrhagies' => "Metorrhagies Aménorrhée <= 5mois Aménorrhée > 5mois",
        'anemie_clinique' => "Anémie clinique hb< 10gr%",
        'odemes' => "Odemes",
        'infection_urinaire' => "Infection urinaire",
        'perte_fetide' => "Perte fétide ou prurit"
    ];
}
function page_3(){
    return[
        'suspicion_bassin_retreci' => "Suspicion d'un bassin retreci (boiterie, handicap physique)\n DAP< 18cm",
        'ca_uc_f_vada' => "Cesarienne antérieure ou utérus cicatriciel, forceps, ventouse au dernier accouchement",
        'parite' => "Parite> 6 </br> age< 17 ans\n age> 38 ans",
        'primapare' =>'Primipare',
        'taille' => "Taille< 150 cm",
        'mn_dn_ed' => "Mort-né ou dernier-né ou enfant decedé dans la première semaine > 1 ",
        'bw' => "Bw",
        'srv' => "Srv",
        'thb' => "T*Hb",
        'position_transverse' => "Position transverse",
        'siege' => "Siege",
        'gemellaire' => "Gemellaire"
    ];
}

function dateFormat($date, $type = 'table'){
	if (empty($date)) {
		return "";
	}
 	switch ($type) {
 		case 'table':
 			return Carbon::parse($date)->locale('fr_FR')->isoFormat('LL');
 			break;
 		case 'mysql':
 			return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
 			break;
 		case 'mysql_time':
 			return Carbon::createFromFormat('d/m/Y H:i', $date)->format('Y-m-d H:i');
 			break;
 		case 'form':
 			return Carbon::parse($date)->format('d/m/Y');
 			break;
 		case 'isoFormat':
 			if (empty($date)) {
 				return trans("Jamais");
 			}
 			return Carbon::parse($date)->locale('fr_FR')->isoFormat('LLLL');
 			break;
 		case 'human':
 			return Carbon::parse($date)->diffForHumans();
 			break;
 		default:
 			return "";
 			break;
 	}
}

?>
