<?php

namespace Artisaninweb\SoapWrapper;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'SoapWrapper';
    }
}
