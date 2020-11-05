<?php


namespace Wandx\Support\Traits;


use Ramsey\Uuid\Uuid;

trait UuidForKey
{

    public static function bootUuidForKey()
    {
        static::creating(function ($model) {
            $model->incrementing = false;
            $model->fillable = ['id'];
            $model->{$model->getKeyName()} = (string)Uuid::uuid4();
        });
    }
}
