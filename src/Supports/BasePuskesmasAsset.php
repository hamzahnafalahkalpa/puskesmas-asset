<?php

namespace Hanafalah\PuskesmasAsset\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BasePuskesmasAsset extends PackageManagement
{
    /** @var array */
    protected $__puskesmas_asset_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('puskesmas_asset', $this->__puskesmas_asset_config);
    }
}
