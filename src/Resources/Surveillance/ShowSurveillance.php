<?php

namespace Hanafalah\PuskesmasAsset\Resources\Surveillance;

use Hanafalah\ModulePatient\Resources\VisitPatient\ShowVisitPatient;

class ShowSurveillance extends ViewSurveillance
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [];
    $show = $this->resolveNow(new ShowVisitPatient($this));
    $arr = $this->mergeArray(parent::toArray($request),$show,$arr);
    return $arr;
  }
}
