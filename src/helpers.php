<?php

use eis3nhorn\ScormCloudGateway\ScormCloudGateway;

if (! function_exists('scormcloud')) {
    function scormcloud(): ScormCloudGateway
    {
        return app(ScormCloudGateway::class);
    }
}
