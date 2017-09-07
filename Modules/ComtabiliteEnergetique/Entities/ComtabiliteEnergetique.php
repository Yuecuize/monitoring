<?php namespace Modules\ComtabiliteEnergetique\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ComtabiliteEnergetique extends Model
{
    use Translatable;

    protected $table = 'comtabiliteenergetique__comtabiliteenergetiques';
    public $translatedAttributes = [];
    protected $fillable = [
        'name',
        'url',
        'content'

    ];
}
