<?php

namespace App\Exceptions;

use Exception;

class NotEnoughProductInStockException extends Exception
{
    public function report()
    {
        //
    }

    public function render()
    {
        return view('errors.not-enough-product-in-stock');
    }
}
