<?php namespace Modules\ComtabiliteEnergetique\Entities;

use Illuminate\Database\Eloquent\Model;

class ComtabiliteEnergetiqueTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'comtabiliteenergetique__comtabiliteenergetique_translations';
}
