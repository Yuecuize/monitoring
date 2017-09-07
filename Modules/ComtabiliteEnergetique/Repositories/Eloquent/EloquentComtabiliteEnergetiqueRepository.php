<?php namespace Modules\ComtabiliteEnergetique\Repositories\Eloquent;

use Modules\ComtabiliteEnergetique\Repositories\ComtabiliteEnergetiqueRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentComtabiliteEnergetiqueRepository extends EloquentBaseRepository implements ComtabiliteEnergetiqueRepository
{
    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->orderBy('created_at', 'DESC')->get();
    }

}
