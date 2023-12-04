<?php

namespace App\Controllers;

class Caffe extends BaseController
{
    public function index(): string
    {
        return view('/caffe/index');
    }
}
