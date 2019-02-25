<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "bast_id" => $row[0],
        "bast_file" => $row[1],
        "periode" => $row[2],
        "namebastfile" => $row[3],
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
