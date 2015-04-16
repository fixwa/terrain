<?php

namespace Terrain\Repositories;
use Terrain\Land;

class LandRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getForPublicMap()
    {
        $lands = Land::all();

        return $lands;
    }
}
