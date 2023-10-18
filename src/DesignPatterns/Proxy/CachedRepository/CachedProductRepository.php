<?php

namespace Src\DesignPatterns\Proxy\CachedRepository;

use Illuminate\Cache\Repository;

class CachedProductRepository implements ProductRepositoryInterface
{
    private ProductRepositoryInterface $productRepository;
    private Repository $cache;

    /**
     * @param ProductRepositoryInterface $productRepository
     * @param Repository $cache
     */
    public function __construct(ProductRepositoryInterface $productRepository, Repository $cache)
    {
        $this->productRepository = $productRepository;
        $this->cache = $cache;
    }

    public function all()
    {
        $result = $this->cache->get('products.all');

        if (is_null($result)) {
            $result = $this->productRepository->all();
            $this->cache->set('products.all', $result);
        }

        return $result;

    }
}
