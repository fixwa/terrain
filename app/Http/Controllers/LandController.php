<?php
namespace Terrain\Http\Controllers;

use Terrain\Land;

class LandController
{

$user = new Land;

$user->user_id = 1;
$user->title = 'John - ' . rand(1, 100);
$user->latitude = '1111111111';
$user->longitude = '222222222';
$user->location = 'location';
$user->price = 'price';
$user->square_meters = 'square_meters';
$user->description = 'description';

$user->save();

$land = Land::find($user->id);

dd($land->title);
}
