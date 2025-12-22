<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\PuskesmasAsset\Resources\Posyandu\{
    ViewPosyandu, ShowPosyandu
};

class Posyandu extends Pustu
{
    protected $table = 'unicodes';

    public function getViewResource(){
        return ViewPosyandu::class;
    }

    public function getShowResource(){
        return ShowPosyandu::class;
    }    
}
