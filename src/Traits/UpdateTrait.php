<?php


namespace Wandx\Support\Traits;


use Illuminate\Database\Eloquent\Model;

trait UpdateTrait
{
    public function update(array $data, $id): Model
    {
        $model = $this->_model->newQuery()->findOrFail($id);
        $model->update($data);
        return $model;
    }
}
