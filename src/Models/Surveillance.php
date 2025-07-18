<?php

namespace Hanafalah\PuskesmasAsset\Models;

use Hanafalah\ModulePatient\Models\EMR\VisitPatient;
use Hanafalah\PuskesmasAsset\Resources\Surveillance\{
    ViewSurveillance,
    ShowSurveillance
};

class Surveillance extends VisitPatient
{   
    protected $table = 'visit_patients';

    protected $casts = [
        'name' => 'string'
    ];

    public function getViewResource(){
        return ViewSurveillance::class;
    }

    public function getShowResource(){
        return ShowSurveillance::class;
    }
}
