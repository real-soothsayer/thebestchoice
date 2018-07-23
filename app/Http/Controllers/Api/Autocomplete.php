<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class Autocomplete extends Controller
{
    //

    private $token = "KjXIkhVUjoMPPd3nKdOx5N0seKVbEP0R";

    public function index(Request $request) 
    {
        $api_token = $request->api_token;
        
        if ($api_token === $this->token) 
        {
            $test = \App\Models\Veux::all();
            echo $test->toJson();
            //dd('on est entré');
        }
    }
    
    public function create_history(Request $request) 
    {
        $api_token = $request->api_token;
        if ($api_token === $this->token) 
        {
            $libelle_recherche = $request->search;
            $code_recherche = hash('md5', $libelle_recherche);
            $date = date('Y-m-d', strtotime('now'));

            DB::table('search_histories')->insert(
                ['code_recherche' => $code_recherche, 'libelle_recherche' => $libelle_recherche, 'created_at' => $date]
            );

        }
    }

}
