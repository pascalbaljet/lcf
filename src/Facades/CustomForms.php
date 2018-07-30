<?php

namespace Pbmedia\CustomForms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pbmedia\CustomForms\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
