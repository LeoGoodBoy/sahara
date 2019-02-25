<?php
include "controller/control_SAKURA.php";
$main = new control_SAKURA();
if (isset($_GET['master_user'])) {
    $main->lihat_data_master_user();
} else if (isset($_GET['user'])) {
    $main->lihat_data_user();
} else if (isset($_GET['contract'])) {
    $main->lihat_data_contract();
} else if (isset($_GET['sales_order'])) {
    $main->lihat_data_sales_order();
} else if (isset($_GET['employee_login'])) {
    $main->lihat_data_employee_login();
} else if (isset($_GET['allowance'])) {
    $main->lihat_data_allowance();
} else if (isset($_GET['vendor_mcu'])) {
    $main->lihat_data_vendor_mcu();
} else if (isset($_GET['activity'])) {
    $main->lihat_data_activity();
} else if (isset($_GET['overtime'])) {
    $main->lihat_data_overtime();
} else if (isset($_GET['request'])) {
    $main->lihat_data_request();
} else if (isset($_GET['role'])) {
    $main->lihat_data_role();
} else if (isset($_GET['role_employee'])) {
    $main->lihat_data_role_employee();
} else if (isset($_GET['customers'])) {
    $main->lihat_data_customers();
} else if (isset($_GET['adjustment_type'])) {
    $main->lihat_data_adjustment_type();
} else if (isset($_GET['allocation'])) {
    $main->lihat_data_allocation();
} else if (isset($_GET['job_title'])) {
    $main->lihat_data_job_title();
} else if (isset($_GET['package_mcu'])) {       
    $main->lihat_data_package_mcu();
} else if (isset($_GET['project_type'])) {
    $main->lihat_data_project_type();
} else if (isset($_GET['status_bast'])) {
    $main->lihat_data_status_bast();
} else if (isset($_GET['so_bast'])) {
    $main->lihat_data_so_bast();
} else if (isset($_GET['email_search_master'])) {
    $email = $_GET['email_search_master'];
    $main->cari_email_master_employee($email);
} else if (isset($_GET['email_search_user'])) {
    $email = $_GET['email_search_user'];
    $main->cari_email_user($email);
} else if (isset($_GET['list_API'])) {
    $main->lihat_list_api();
} else if(isset($_GET['nik_employee_login'])){
    $empl_nik = $_GET['nik_employee_login'];
    $main->cek_employee_login($empl_nik);
}
?>
