<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "empl_nik" => $row[0],
        "name" => $row[1],
        "no_ktp" => $row[2],
        "no_npwp" => $row[3],
        "bpjs_ketenagakerjaan_number" => $row[4],
        "bpjs_kesehatan_number" => $row[5],
        "bank_account_number" => $row[6],
        "bank_name" => $row[7],
        "bank_cabang" => $row[8],
        "bank_nasabah" => $row[9],
        "email" => $row[10],
        "join_date" => $row[11],
        "dateofbirth" => $row[12],
        "placeofbirth" => $row[13],
        "address_street" => $row[14],
        "address_city" => $row[15],
        "address_postcode" => $row[16],
        "marriage_status" => $row[17],
        "hp" => $row[18],
        "hp_emergency" => $row[19],
        "gender" => $row[20],
        "position" => $row[21],
        "empl_isactive" => $row[22]
//        "empl_isactive" => $row[23]
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
