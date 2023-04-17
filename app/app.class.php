<?php

class app
{
    public function massDelete($db)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete-checkbox']) && is_array($_POST['delete-checkbox'])) {
            foreach ($_POST['delete-checkbox'] as $checked) {
                $db->delete($checked);
            }
        }
    }
    public function add($db)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //$db->insert(, , );
            $type = strtolower($_POST['type']);
            $prod = new $type($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['spec']);
            $prod->insert($db);

        }
    }
}