<?php


namespace Wandx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface UpdateInterface
{
    public function update(array $data, $id):Model;
}
