<?php
namespace App\Repository\OrderItems;

use App\Repository\BaseRepository;
use App\Models\OrderItem;

class OrderItemRepository extends BaseRepository implements OrderItemRepositoryContract{

    public function model(): string
    {
        return OrderItem::class;
    }
}
