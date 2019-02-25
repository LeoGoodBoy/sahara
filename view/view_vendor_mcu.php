<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "vendormcu_id" => $row[0],
        "vendor_name" => $row[1]
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