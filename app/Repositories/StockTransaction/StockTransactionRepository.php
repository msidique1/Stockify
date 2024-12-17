<?php

namespace App\Repositories\StockTransaction;

use LaravelEasyRepository\Repository;

interface StockTransactionRepository extends Repository {
    public function all();
    public function allNoPaginate();
    public function find($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
    public function filterByType($type);
    public function filterByCriteria($criteria);
    public function getMinimumStock();
    public function updateMinimumStock($minQuantity);
    public function countTransactionByTypeAndPeriod($type, $days);
    public function transactionByMonthAndYear($type);
}
