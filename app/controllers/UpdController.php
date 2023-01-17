<?php
namespace App\Controllers;
use App\Models\ProductModel;

class UpdController extends Controller
{
    private $productModel = null;

    public function __construct(ProductModel $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index()
    {
        $id = (integer)$_POST['id'];
        $data['name'] = $_POST['name'];
        $data['price'] = (float)$_POST['price'];
        $this->productModel->updProduct($data, $id);
    }

}