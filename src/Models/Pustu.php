<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\ModuleWarehouse\Models\Building\Building;
use Hanafalah\PuskesmasAsset\Resources\Pustu\{
    ViewPustu, ShowPustu
};

class Pustu extends Building
{   
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewPustu::class;
    }

    public function getShowResource(){
        return ShowPustu::class;
    }
}
