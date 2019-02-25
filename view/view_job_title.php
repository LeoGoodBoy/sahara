<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "jobtitle_id" => $row[0],
        "job_title" => $row[1]
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
