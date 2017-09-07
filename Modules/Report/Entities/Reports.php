<?php namespace Modules\Report\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use Translatable;

    protected $table = 'report__reports';
    public $translatedAttributes = [];
    protected $fillable = [];
}
