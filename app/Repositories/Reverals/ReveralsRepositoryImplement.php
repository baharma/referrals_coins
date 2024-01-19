<?php

namespace App\Repositories\Reverals;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\Reverals;

class ReveralsRepositoryImplement extends Eloquent implements ReveralsRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct()
    {

    }

    // Write something awesome :)
}
