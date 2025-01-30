<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {}

    public function makeOrder(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required | exists : users,id',
            'category_id' => 'required | exists : categories,id',
            'dish_id' => 'required |  exists : dishes,id',
            'date' => 'required | date',
            'total_price' => 'required | integer',

        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'category_id' => $validateData['category_id'],
            'dish_id' => $validateData['dish_id'],
            'date' => $validateData['date'],
            'total_price' => $validateData['total_price'],

        ]);
    }
}
