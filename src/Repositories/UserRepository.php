<?php


namespace Wandx\Support\Repositories;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Wandx\Support\Interfaces\CrudInterface;

abstract class UserRepository implements CrudInterface
{
    /**
     * @param array $data
     * @return string|null
     */
    abstract public function token(array $data): ?string;

    /**
     * @return Model|Authenticatable
     */
    abstract public function profile();
}