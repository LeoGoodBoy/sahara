<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "role_id" => $row[0],
        "role_name" => $row[1],
        "description_role" => $row[2]
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