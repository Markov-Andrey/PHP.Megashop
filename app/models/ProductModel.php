<?php

namespace App\Models;

class ProductModel extends Model
{
    protected $fields = ['name', 'price'];
    protected $table = 'products';
    
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $query = "SELECT * FROM products";
        $stmt = $this->pdo->query($query);
        $response = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $response;
    }

    public function getProducts2()
    {
        $response = $this->queryBuilder->select($this->table, ["*"])->get()->toArray();
        
        return $response;
    }

    public function addProduct(array $data)
    {
       $result = $this->queryBuilder->insertData($this->table, $this->fields, $data);
    }

    public function delProduct($data)
    {
        foreach($data as $k => $v){
            $this->queryBuilder->delete($this->table)
            ->where([$k, "=", $v])
            ->get();
        }
    }
}