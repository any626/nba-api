<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//teams
ROUTE::get('/api/teams/getTeams', 'TeamController@getAllTeams');
ROUTE::get('/api/teams/getTeam/{id}', 'TeamController@getTeamById');

//conferences
ROUTE::get('/api/conference/getConferences', 'ConferenceController@getAllConferences');
ROUTE::get('/api/conference/getTeamsByConference/{id}', 'ConferenceTeamController@getTeamsByConference');

//players
ROUTE::get('/api/players/getAllPlayers', 'PlayerController@getAllPlayers');
ROUTE::get('/api/players/getPlayersByFirstName/{name}', 'PlayerController@getPlayersByFirstName');
ROUTE::get('/api/players/getPlayersByLastName/{name}', 'PlayerController@getPlayersByLastName');
ROUTE::get('/api/players/getPlayersByName/{first}/{last}', 'PlayerController@getPlayersByFullName');
ROUTE::get('/api/players/getPlayer/{id}', 'PlayerController@getPlayerById');

//stats
ROUTE::get('/api/stats/getStatTypes', 'StatTypeController@getStatTypes');
ROUTE::get('/api/stats/getPlayerStats/{id}', 'CareerStatController@getPlayerStats');
ROUTE::get('/api/stats/getSpecificPlayerStat/{id}/{statId}', 'CareerStatController@getStat');
