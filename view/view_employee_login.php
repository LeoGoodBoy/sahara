<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "empl_nik" => $row[0],
        "password" => $row[1]
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
