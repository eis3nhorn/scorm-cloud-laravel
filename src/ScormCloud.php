<?php

namespace eis3nhorn\ScormCloudGateway;

use Illuminate\Support\Facades\Facade;

class ScormCloud extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ScormCloud';
    }
}
