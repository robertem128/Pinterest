<?php

namespace robertem128\Pinterest;

use SocialiteProviders\Manager\SocialiteWasCalled;

class PinterestExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'pinterest', __NAMESPACE__.'\Provider'
        );
    }
}
