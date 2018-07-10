<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SortController extends Controller
{
    public function sort_list($a, $subkey) {
    foreach ($a as $k=>$v) {
        $b[$k] = strtolower($v[$subkey]);
    }
    asort($b);
    
    foreach ($b as $key=>$val) {
        $c[] = $a[$key];
    }
    return $c;
}

	public function sorter($sort_name) { 
	    global $array;
	    global $sort_name;
	    $sort_name = 'без сортировки';
	    $sorting = isset($_GET['sort']) ? $_GET['sort'] : null;
	    switch ($sorting) {
	        case 'name-sort';
	        $array = sort_list($array, 'name');
	        $sort_name = 'по имени пользователя';
	        break;

	        case 'email-sort';
	        $array = sort_list($array, 'email');
	        $sort_name = 'по email';
	        break;
	        
	        case 'date-sort';
	        $array = sort_list($array, 'created_at');   
	        $sort_name = 'по дате';
	        break;
	    }
	}

	public static function display($arrays){
		$array = $arrays->toArray();

		
	
		rsort($array);
		//sorter($sortname);

		return view('home', ['users' => $array]);
	}
}
