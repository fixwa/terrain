<?php namespace Terrain\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Terrain\Repositories\LandRepository;

class LandsComposer {

    /**
     * The Land repository implementation.
     *
     * @var LandRepository
     */
    protected $lands;

    /**
     * Create a Land composer.
     *
     * @param LandRepository $lands
     */
    public function __construct(LandRepository $lands)
    {
        $this->users = $lands;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('lands', $this->users->getForPublicMap());
    }

}
