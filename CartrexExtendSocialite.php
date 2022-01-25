<?php

namespace Cartrex\LaravelSocialiteprovider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class CartrexExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('cartrex', Provider::class);
    }
}