<?php namespace Modules\ComtabiliteEnergetique\Repositories\Cache;

use Modules\ComtabiliteEnergetique\Repositories\ComtabiliteEnergetiqueRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheComtabiliteEnergetiqueDecorator extends BaseCacheDecorator implements ComtabiliteEnergetiqueRepository
{
    public function __construct(ComtabiliteEnergetiqueRepository $comtabiliteenergetique)
    {
        parent::__construct();
        $this->entityName = 'comtabiliteenergetique.comtabiliteenergetiques';
        $this->repository = $comtabiliteenergetique;
    }
}
