<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function create() {
        return redirect(route('product.getAll'))->withSuccessMessage('Purchases created.');
    }
}
