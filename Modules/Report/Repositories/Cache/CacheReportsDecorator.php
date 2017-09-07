<?php namespace Modules\Report\Repositories\Cache;

use Modules\Report\Repositories\ReportsRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheReportsDecorator extends BaseCacheDecorator implements ReportsRepository
{
    public function __construct(ReportsRepository $reports)
    {
        parent::__construct();
        $this->entityName = 'report.reports';
        $this->repository = $reports;
    }
}
