<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $entities = [];
    public function __construct()
    {
        for ($i = 0; $i < 100; $i++) {
            $this->entities[] = array(
                    'title' => 'movies-'.$i,
                    'releaseYear' => rand(date('Y'), 2000),
                    'programType' => rand(0,1) ? 'series' : 'movie'
            );
        }
    }

    public function home(Request $request) {
        return response()->json([], 200);
    }
    public function series(Request $request) {
        $series = [];
        $i = 0;
        foreach($this->entities as $entity) {
            if($entity['releaseYear'] >= 2010 && $entity['programType'] == 'series') {
                $series[] = $entity;
                if($i == 20)
                    break;
                $i++;

            }
        }
        return response()->json($series, 200);
    }
    public function videos(Request $request) {
        $videos = [];
        $i = 0;
        foreach($this->entities as $entity) {
            if($entity['releaseYear'] >= 2010 && $entity['programType'] == 'movie') {
                $videos[] = $entity;
                if($i == 20)
                    break;
                $i++;
            }
        }
        return response()->json($videos, 200);
    }
}
