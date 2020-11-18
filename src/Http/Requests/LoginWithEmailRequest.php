<?php


namespace Wandx\Support\Http\Requests;


use Wandx\Support\Abstracts\DingoFormRequest;

class LoginWithEmailRequest extends DingoFormRequest
{

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
    }

    public function data(): array
    {
        return $this->only(['email', 'password']);
    }
}