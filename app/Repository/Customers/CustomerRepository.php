<?php
namespace App\Repository\Customers;

use App\Repository\BaseRepository;
use App\Models\Customer;

class CustomerRepository extends BaseRepository implements CustomerRepositoryContract{

    public function model(): string
    {
        return Customer::class;
    }
}
