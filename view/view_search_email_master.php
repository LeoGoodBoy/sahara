<?php

$item = null;
while ($row = $this->model->fetch($data)) {
    $item [] = array(
        "empl_nik" => $row[0],
        "name" => $row[1],
        "no_ktp" => $row[2],
        "no_npwp" => $row[3],
        "bpjs_ketenagakerjaan_number" => $row[5],
        "bpjs_kesehatan_number" => $row[6],
        "bank_account_number" => $row[7],
        "bank_name" => $row[8],
        "bank_cabang" => $row[9],
        "bank_nasabah" => $row[10],
        "email" => $row[11],
        "join_date" => $row[12],
        "dateofbirth" => $row[13],
        "placeofbirth" => $row[14],
        "address_street" => $row[15],
        "address_city" => $row[16],
        "address_postcode" => $row[17],
        "marriage_status" => $row[18],
        "hp" => $row[19],
        "hp_emergency" => $row[20],
        "gender" => $row[21],
        "position" => $row[22]
//        "empl_isactive" => $row[23]
    );
}

if ($item == NULL) {
    $json = array(
        'result' => 'Failed',
        'data' => $item
    );
}else{
    $json = array(
        'result' => 'Success',
        'data' => $item
    );
}

echo json_encode($json);
?> 
