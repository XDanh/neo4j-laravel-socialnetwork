<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GraphAware\Bolt\Protocol\V1\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Session $client)
    {
        $cypher="
        MERGE (keanu:Person {name: 'Keanu Reeves'})
        ON CREATE
        SET keanu.created = timestamp()
        RETURN keanu.name, keanu.created";
        $client->run($cypher);
        return view('home');

    }
}
