<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "roles_employee_id" => $row[0],
        "employee_role" => $row[1]
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