<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class ApiClientController extends Controller
{
    public function index()
    {
        $client = Services::curlrequest();

        try {

            $response = $client->get('https://dummyjson.com/recipes');

            $result = json_decode($response->getBody(), true);

            return view('api_client', [
                'recipes' => $result['recipes']
            ]);

        } catch (\Exception $e) {

            return view('api_client', [
                'recipes' => [],
                'error' => $e->getMessage()
            ]);
        }
    }
}
