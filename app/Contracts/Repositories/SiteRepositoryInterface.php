<?php

namespace App\Contracts\Repositories;

interface SiteRepositoryInterface extends AbstractRepositoryInterface
{
    public function getSiteById();

    public function getProduct();
}
