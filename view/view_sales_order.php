<?php

while ($row = $this->model->fetch($data)) {
    $item[] = array(
        "so_id" => $row[0],
        "sotype_id" => $row[1],
        "customer_id" => $row[2],
        "projecttype_id" => $row[3],
        "project_name" => $row[4],
        "rm_name" => $row[5],
        "bid_manager_name" => $row[6],
        "start_contract" => $row[7],
        "end_contract" => $row[8],
        "ionumber_status" => $row[9],
        "io_number" => $row[10],
        "so_status" => $row[11],
        "contract_number" => $row[12],
        "contract_name" => $row[13],
        "description" => $row[14],
        "overtime_status" => $row[15],
        "dept_mgr_name" => $row[16],
        "allowance_status" => $row[17],
        "tra_status" => $row[18],
        "plan_empl_total" => $row[19],
        "actual_empl_total" => $row[20],
        "last_update" => $row[21],
        "status_delete" => $row[22],
        "migration_id" => $row[23],
        "status_acc" => $row[24],
//        "cogs_total" => $row[25]
        "cogs_total_filename" => $row[26],
        "reason_acc" => $row[27],
        "service_typeid" => $row[28]
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
