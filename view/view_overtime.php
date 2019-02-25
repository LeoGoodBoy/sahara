<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "overtime_id" => $row[0],
        "overtime_type" => $row[1],
        "chargeback_type" => $row[2],
        "mealstransport_status" => $row[3],
        "so_id" => $row[4]
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