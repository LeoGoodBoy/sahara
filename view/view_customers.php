<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "customer_id" => $row[0],
        "customer_name" => $row[1],
        "customer_address" => $row[2],
        "customer_phone" => $row[3],
        "customer_industry" => $row[4]
    );
}

//Menampung data yang dihasilkan
$json = array(
    'result' => 'Success',
    'data' => $item
);

//Merubah data kedalam bentuk JSON
echo json_encode($json);
?> 
