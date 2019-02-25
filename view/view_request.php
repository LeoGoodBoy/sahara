<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "request_id" => $row[0],
        "user_id" => $row[1],
        "waktu" => $row[2],
        "status" => $row[3],
        "reason" => $row[4],
        "allowance_id" => $row[5],
        "mcu_id" => $row[6]
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