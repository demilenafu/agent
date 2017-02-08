<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Request;

use DB;
use Input;
use SoapClient;
use stdClass;
use SoapVar;
use SoapHeader;

use Geocode;
use obtenerLatLon;

use Illuminate\Support\Collection as Collection;

class agentController extends Controller
{
    public function agents(){
    	$message = array();
    	$data = $_POST['data'];
    	$agent1 = $data[0]["value"];
    	$agent2 = $data[1]["value"];

    	$ag1 = Geocode::make()->address($agent1);
    	$ag1lat = $ag1->latitude();
    	$ag1lon = $ag1->longitude();
    	//echo "Agent 1: Lat: ".$ag1lat." - Lon: ".$ag1lon;

		$ag2 = Geocode::make()->address($agent2);
    	$ag2lat = $ag2->latitude();
    	$ag2lon = $ag2->longitude();
    	//echo  "<br>Agent 2: Lat: ".$ag2lat." - Lon: ".$ag2lon;

  		$nombre = 'Contact_List.csv';
  		$ruta  =  storage_path('csv') ."/". $nombre;

  		$fp = fopen($ruta,'r');
		if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}

		$loop = 0; // contador de líneas
		while (!feof($fp)) { // loop hasta que se llegue al final del archivo
			$loop++;
			$line = fgets($fp); // guardamos toda la línea en $line como un string
			// dividimos $line en sus celdas, separadas por el caracter |
			// e incorporamos la línea a la matriz $field
			$field[$loop] = explode (',', $line);

			$zip = $field[$loop][1];
			$zip1 = Geocode::make()->address($zip);
	    	$ziplat = $zip1->latitude();
	    	$ziplon = $zip1->longitude();

	    	$disAg1 = $this->distanciaGeodesica($ag1lat, $ag1lon, $ziplat, $ziplon);
	    	$disAg2 = $this->distanciaGeodesica($ag2lat, $ag2lon, $ziplat, $ziplon);

	    	if($disAg1 <= $disAg2)
	    	{
	    		echo "Name: ".$field[$loop][0]." - Zip Code: ".$field[$loop][1]." - Agente 1\n";
	    	}
	    	else{
	    		echo "Name: ".$field[$loop][0]." - Zip Code: ".$field[$loop][1]." - Agente 2\n";
	    	}

			// generamos la salida HTML
			
			$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
		}

		fclose($fp);
  		//return $agent1;
    }

    public function obtenerLatLon($zip) {
		$response = Geocode::make()->address($zip);
		if ($response) {
			//array_push($response->latitude, "$response->latitude() del  al ");
		    echo $response->latitude();
		    echo '<br>';
		    echo $response->longitude();
		    echo $response->formattedAddress();
		    echo $response->locationType();
		}
		return $response->latitude;
    }

    function distanciaGeodesica($lat1, $long1, $lat2, $long2){

		$degtorad = 0.01745329;
		$radtodeg = 57.29577951;

		$dlong = ($long1 - $long2);
		$dvalue = (sin($lat1 * $degtorad) * sin($lat2 * $degtorad))
		+ (cos($lat1 * $degtorad) * cos($lat2 * $degtorad)
		* cos($dlong * $degtorad));

		$dd = acos($dvalue) * $radtodeg;

		$miles = ($dd * 69.16);
		$km = ($dd * 111.302);

		return $km;
	}

}
