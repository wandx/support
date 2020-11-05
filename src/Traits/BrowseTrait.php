<?php


namespace Wandx\Support\Traits;


use Closure;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

trait BrowseTrait
{
    public function browse(Closure $condition, int $perPage = 10): ?LengthAwarePaginator
    {
        $query = $this->_model->newQuery();

        if ($condition != null) {
            $query->where($condition);
        }

        return $query->paginate($perPage);
    }

    public function browseWithRequest(Request $request, int $perPage = 10): ?LengthAwarePaginator
    {
        return null;
    }
}
