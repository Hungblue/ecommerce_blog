<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\SiteRepository;
use App\Contracts\Repositories\SiteRepositoryInterface;

class SiteController extends Controller
{
    protected $siteRepository;

    public function __construct(SiteRepositoryInterface $siteRepository)
    {
        $this->siteRepository = $siteRepository;
    }

    public function getSite()
    {
        $sites = $this->siteRepository->getSiteById();

        return view('repository.index', compact('sites'));
    }

    public function getProduct()
    {
      $products = $this->siteRepository->getProduct();

      return view('repository.index2', compact('products'));
    }
}
