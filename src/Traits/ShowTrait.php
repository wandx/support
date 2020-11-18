<?php


namespace Wandx\Support\Traits;


use Illuminate\Database\Eloquent\Model;

trait ShowTrait
{
    public function show($id): Model
    {
        return $this->_model->newQuery()->findOrFail($id);
    }

    public function showByColumn(string $column, $identifier)
    {
        return $this->_model->newQuery()->where($column, $identifier)->firstOrFail();
    }
}
