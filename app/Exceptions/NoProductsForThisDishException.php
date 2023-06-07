<?php

namespace App\Exceptions;

use Exception;

class NoProductsForThisDishException extends Exception
{
    public function report()
    {
        //
    }

    public function render()
    {
        return view('errors.no-products');
    }
}
