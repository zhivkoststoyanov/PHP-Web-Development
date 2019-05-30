<?php

/**
 * Description of Products
 *
 * @author User
 */

namespace Controllers;

class ProductsController extends Controller {

    function __construct($db_connection, string $controller_name) {

        parent::__construct($db_connection, $controller_name);
        $this->model = new \Models\Products($this->db_connection);
    }

    public function edit() {



        $data['categories_model'] = new \Models\Categories($this->db_connection);


        $data['product'] = ['product_id' => '', 'product_name' => '', 'price' => '', 'description' => '', 'cat_id' => ''];

        if ($_POST) {
            $product_id = $_POST['product_id'] ?? null;
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $cat_id = $_POST['cat_id'];

            if (!$product_id) {
                $product_id = $this->model->createProduct($product_name, $cat_id, $description, $price);
                $mode = 1;
            } else {

                $this->model->updateProduct($product_id, $product_name, $price, $description, $cat_id);
                $mode = 2;
            }

            header('Location: view/' . $product_id . '&mode=' . $mode);
            exit;
        } elseif (isset($_GET['product_id'])) {
            $data['product'] = $this->model->getOne($_GET['product_id']);
        }

        $this->renderView(__FUNCTION__, $data);
    }

    public function index() {

        //$this->model = new \Models\Products($this->db_connection);
        $this->renderView(__FUNCTION__);
    }

    public function view($product_id) {


        if (!$product_id) {
            throw new \Exception('No product id!');
        }

        //$this->model = new \Models\Products($this->db_connection);

        $product = $this->model->getOne($product_id);

        if (!$product) {
            throw new \Exception('No product found!');
        }

        //$this->renderView(__FUNCTION__);
        include ('Views/view.php');
    }

}
