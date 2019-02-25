<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "package_id" => $row[0],
        "package_type" => $row[1],
        "cost" => $row[2]
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
