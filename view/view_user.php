<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "user_id" => $row[0],
        "password" => $row[1],
        "username" => $row[2],
        "name" => $row[3],
        "email" => $row[4],
        "no_hp" => $row[5],
        "role_id" => $row[6],
        "image" => $row[7],
        "active" => $row[8]
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
