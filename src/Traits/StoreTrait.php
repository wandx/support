<?php


namespace Wandx\Support\Traits;


use Illuminate\Database\Eloquent\Model;

trait StoreTrait
{
    public function store(array $data): Model
    {
        return $this->_model->create($data);
    }
}
