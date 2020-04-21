<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function users(){
      return $this->belongsTo(User::class,'user_id');
    }

    public function projectimages(){
      return $this->hasMany(ProjectImage::class,'project_id');
    }
    public function getRouteKeyName(){
      return 'slug';
    }
}
