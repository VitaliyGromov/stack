<?php

namespace App\Http\Controllers;

class DishController extends Controller
{
    public function index()
    {
        return view('dishes.index');
    }

    public function store()
    {
        return 'dish store request';
    }

    public function update()
    {
        return 'dish update request';
    }

    public function delete()
    {
        return 'delete dish requst';
    }
}
