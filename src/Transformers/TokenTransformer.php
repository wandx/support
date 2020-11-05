<?php


namespace Wandx\Support\Transformers;


use Illuminate\Support\Collection;
use League\Fractal\TransformerAbstract;

class TokenTransformer extends TransformerAbstract
{
    public function transform(Collection $collection)
    {
        return [
            'token' => $collection['token'],
        ];
    }
}
