<?php

namespace App\Http\Controllers\Home;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class OrderController extends HomeController
{

    public function book(){
        return view("index.orders.book-now");
    }

    public function order(Request $request){
        $input = $request->all();

        /*
         * "id$" = $input['"' ]57
            "type$" = $input['"' ]"service_category"
            "name$" = $input['"' ]"Basic Clean"
            "color$" = $input['"' ]null
            "ordering$" = $input['"' ]0
         */

        $category = $input['category'];
        $firstname = $input['firstname'];
        $lastname = $input['lastname'];
        $email = $input['email'];
        $phone = $input['phone'];
        $address = $input['address'];
        $city = $input['city'] ?? '';
        $apt_suite = $input['apt_suite'] ?? '';
        $post_code = $input['post_code'] ?? '';
        $state = $input['state'] ?? '';
        $uuid = Str::uuid();
        Order::create([
            'service_type' => $category['name'],
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'city' => $city,
            'apt_suite' => $apt_suite,
            'post_code' => $post_code,
            'state' => $state,
            'uuid' => $uuid,
            'total_price' => $input['total_price'] ?? 0
        ]);

        $order = Order::query()->where('uuid', '=', $uuid)->first()->toArray();
        $bedroom = $input['bedroom'];
        OrderItem::query()->insert([
            'name' => $bedroom['name'],
            'item_id' => $bedroom['id'],
            'price' => $bedroom['price'],
            'quantity' => 1,
            'total_price' => $bedroom['price'],
            'type' => 'bedroom',
            'order_id' => $order['id']
        ]);
        $bathroom = $input['bathroom'];

        OrderItem::query()->insert([
            'name' => $bathroom['label'],
            'item_id' => $bathroom['id'] ?? 0,
            'price' => $bathroom['price'],
            'quantity' => 1,
            'total_price' => $bathroom['price'],
            'type' => 'bathroom',
            'order_id' => $order['id']
        ]);
        $storey = $input['storey'];
        OrderItem::query()->insert([
            'name' => $storey['label'],
            'item_id' => $storey['id'] ?? 0,
            'price' => $storey['price'],
            'quantity' => 1,
            'total_price' => $storey['price'],
            'type' => 'storey',
            'order_id' => $order['id']
        ]);
        $addons = $input['addons'];
        foreach ($addons as $item){
            OrderItem::query()->insert([
                'name' => $item['name'],
                'desc' => $item['description'],
                'item_id' => $item['id'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'total_price' => $item['price'] * $item['quantity'],
                'type' => 'addons',
                'order_id' => $order['id']
            ]);
        }

        return response()->json(
            [
                'success' => true,
                'order' => $order
            ]);
    }
}