<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    //
    public function projects(){
      return $this->belongsTo(Project::class,'project_id');
    }
}
