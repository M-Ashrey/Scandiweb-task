<?php

class app {
    public function massDelete($db){
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['delete-checkbox']) && is_array($_POST['delete-checkbox'])) {
            foreach($_POST['delete-checkbox'] as $checked) {
                $db->delete($checked);
            }
        }
    }
    public function add($db){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (strtolower($_POST['type']) == 'furniture') {
                $_POST['spec'] = $_POST['length'] . 'x' . $_POST['width'] . 'x' . $_POST['height'];
            }
            $db->insert($_POST['sku'], $_POST['name'], $_POST['price'], $_POST['spec'], strtolower($_POST['type']));
            
        }
    }
}