<?php
/**
 * Created by PhpStorm.
 * User: yue
 * Date: 2017/6/29
 * Time: 16:35
 */

namespace Modules\ComtabiliteEnergetique\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CreateComtabiliteEnergetiqueRequeste extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return[
            'name' =>'required',
            'url' =>'required',
            'content' => 'required',
        ];
    }
}