<?php

namespace App\Services\Product;

use LaravelEasyRepository\BaseService;

interface ProductService extends BaseService{
    public function getAllProducts();

    public function getProduct($id);

    public function createProduct($data);

    public function updateProduct($id, $data);

    public function deleteProduct($id);

    public function getAllCategories();

    public function getAllSuppliers();

    public function importFromExcel($file);

    public function exportFromExcel();
}
