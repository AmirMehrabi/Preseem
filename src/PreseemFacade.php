<?php

namespace Amoori\Preseem;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amoori\Preseem\Skeleton\SkeletonClass
 */
class PreseemFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'preseem';
    }
}
