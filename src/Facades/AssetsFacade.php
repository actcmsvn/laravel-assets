<?php

namespace Actcmsvn\Assets\Facades;

use Actcmsvn\Assets\Assets;
use Illuminate\Support\Facades\Facade;

/**
 * @since 22/07/2015 11:25 PM
 */
class AssetsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Assets::class;
    }
}
