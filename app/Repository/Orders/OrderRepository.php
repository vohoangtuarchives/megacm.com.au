<?php
namespace App\Repository\Orders;

use App\Repository\BaseRepository;
use App\Models\Order;

class OrderRepository extends BaseRepository implements OrderRepositoryContract{

    public function model(): string
    {
        return Order::class;
    }
}
