<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "allowance_id" => $row[0],
        "allowance_startdate" => $row[1],
        "allowance_enddate" => $row[2],
        "project_status" => $row[3],
        "total_allowance" => $row[4],
        "allowance_comment" => $row[5],
        "adjustmenttype_id" => $row[6],
        "jobtitle_id" => $row[7],
        "empl_nik" => $row[8],
        "allowancetype_id" => $row[9]
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
