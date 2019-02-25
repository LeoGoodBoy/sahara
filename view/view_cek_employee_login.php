<?php

$item = null;
while ($row = $this->model->fetch($data)) {
    $item [] = array(
        "empl_nik" => $row[0],
        "password" => $row[1]
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
