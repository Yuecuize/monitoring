<?php namespace Modules\Report\Entities;

use Illuminate\Database\Eloquent\Model;

class ReportsTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'report__reports_translations';
}
