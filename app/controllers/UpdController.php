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
      echo "Hello";
      /*
        $data['id'] = (integer)$_POST['id'];
        $this->productModel->delProduct($data);*/
    }

}