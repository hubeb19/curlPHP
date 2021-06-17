<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class GuzzleGetController extends Controller
{
    public function passwordHash()
    {
        $url = 'http://10.62.162.173:9240/_cat/recovery/gateway_default_analytics?format=json&pretty=true';

        /* eCurl */
        $curl = curl_init($url);

        /* Set JSON data to POST */
        curl_setopt($curl, $url);

        // /* Define content type */
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        /* Return json */
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        /* make request */
        $result = curl_exec($curl);

        /* close curl */
        curl_close($curl);

        $result = json_decode($result, true);
        var_dump($result);
            }
    }


