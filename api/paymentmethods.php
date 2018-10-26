<?php 
    function paymentMethods() {
        $arr = array("paymentMethods" => array("Nextypay" ));
        echo json_encode($arr);
    }

    paymentMethods();
?>