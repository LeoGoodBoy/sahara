<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "allocation_id" => $row[0],
        "startdate_allocation" => $row[1],
        "enddate_allocation" => $row[2],
        "type" => $row[3],
        "location" => $row[4],
        "so_id" => $row[5],
        "roles_empl_id" => $row[6],
        "empl_nik" => $row[7],
        "status" => $row[8]
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
