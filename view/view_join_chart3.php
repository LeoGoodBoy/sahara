<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "contract_status" => $row[0],
        "location" => $row[1],
        "customer_name" => $row[2],
        "jumlah" => $row[3]
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