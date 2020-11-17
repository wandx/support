<?php


namespace Wandx\Support\Abstracts;


use Dingo\Api\Http\FormRequest;

abstract class DingoFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    abstract public function rules(): array;

    abstract public function data(): array;
}