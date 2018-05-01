<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppReview extends Model
{
    protected $primaryKey = 'ID';

    protected $table = 'surveydata';

    protected $fillable = ['id', 'apprating', 'productivityrating', 'comments'];
}
