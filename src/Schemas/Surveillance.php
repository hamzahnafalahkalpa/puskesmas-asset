<?php

namespace Hanafalah\PuskesmasAsset\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\PuskesmasAsset\{
    Supports\BasePuskesmasAsset
};
use Hanafalah\PuskesmasAsset\Contracts\Schemas\Surveillance as ContractsSurveillance;
use Hanafalah\PuskesmasAsset\Contracts\Data\SurveillanceData;

class Surveillance extends BasePuskesmasAsset implements ContractsSurveillance
{
    protected string $__entity = 'Surveillance';
    public $surveillance_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'surveillance',
            'tags'     => ['surveillance', 'surveillance-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreSurveillance(SurveillanceData $surveillance_dto): Model{
        $add = [
            'name' => $surveillance_dto->name
        ];
        $guard  = ['id' => $surveillance_dto->id];
        $create = [$guard, $add];
        // if (isset($surveillance_dto->id)){
        //     $guard  = ['id' => $surveillance_dto->id];
        //     $create = [$guard, $add];
        // }else{
        //     $create = [$add];
        // }

        $surveillance = $this->usingEntity()->updateOrCreate(...$create);
        $this->fillingProps($surveillance,$surveillance_dto->props);
        $surveillance->save();
        return $this->surveillance_model = $surveillance;
    }
}