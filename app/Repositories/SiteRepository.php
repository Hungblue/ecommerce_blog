<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Product;
use App\Contracts\Repositories\SiteRepositoryInterface;

class SiteRepository implements SiteRepositoryInterface
{
    //override
    public function getSiteById()
    {
        return User::orderBy('id', 'desc')->get();
    }

    public function getProduct()
    {
      return Product::orderBy('id', 'asc')->get();
    }
}
