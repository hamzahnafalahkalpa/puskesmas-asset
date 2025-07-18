<?php

namespace Hanafalah\PuskesmasAsset\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceData as DataSurveillanceData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class SurveillanceData extends Data implements DataSurveillanceData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;
}