<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "activity_id" => $row[0],
        "waktu" => $row[1],
        "user_id" => $row[2],
        "activity" => $row[3],
        "request_id" => $row[4],
        "approval_id" => $row[5]
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