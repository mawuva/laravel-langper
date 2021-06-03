<?php

namespace Mawuekom\Langper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\Langper\Skeleton\SkeletonClass
 */
class LangperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'langper';
    }
}
