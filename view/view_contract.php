<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "contract_id" => $row[0],
        "contract_status" => $row[1],
        "startcontract_date" => $row[2],
        "endcontract_date" => $row[3],
        "resign_date" => $row[4],
        "resign_reason" => $row[5],
        "resign_description" => $row[6],
        "startdate" => $row[7],
        "empl_nik" => $row[8],
        "file_resign" => $row[9],
        "status_blacklist" => $row[10],
        "file_name" => $row[11],
        "status" => $row[12]
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
