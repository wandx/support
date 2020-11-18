<?php


namespace Wandx\Support\Interfaces;


use Illuminate\Database\Eloquent\Model;

interface ShowInterface
{
    public function show($id):Model;

    public function showByColumn(string $column, $identifier);
}
