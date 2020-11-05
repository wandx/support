<?php


namespace Wandx\Support\Interfaces;


use Closure;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface BrowseInterface
{
    public function browse(Closure $condition, int $perPage = 10): ?LengthAwarePaginator;

    public function browseWithRequest(Request $request, int $perPage = 10): ?LengthAwarePaginator;
}
