<?php

include "model/model_SAKURA.php";

class control_SAKURA {

    public $model;

    function __construct() {
        $this->model = new model_SAKURA();
    }

    function lihat_data_master_user() {
        $data = $this->model->get_data_master_user();
        include "view/view_master_user.php";
    }
    
    function lihat_data_user() {
        $data = $this->model->get_data_user();
        include "view/view_user.php";
    }
    
    function lihat_data_contract() {
        $data = $this->model->get_data_contract();
        include "view/view_contract.php";
    }
    
    function lihat_data_allowance() {
        $data = $this->model->get_data_allowance();
        include "view/view_allowance.php";
    }
    
    function lihat_data_employee_login() {
        $data = $this->model->get_data_employee_login();
        include "view/view_employee_login.php";
    }
    
    function lihat_data_vendor_mcu() {
        $data = $this->model->get_data_vendor_mcu();
        include "view/view_vendor_mcu.php";
    }
    
    function lihat_data_role() {
        $data = $this->model->get_data_roles();
        include "view/view_role.php";
    }
    
    function lihat_data_role_employee() {
        $data = $this->model->get_data_roles_employee();
        include "view/view_role_employee.php";
    }
    
    function cari_email_master_employee($email){
        $data = $this->model->search_email_master_employee($email);
        include "view/view_search_email_master.php";
    }
    
    function cari_email_user($email){
        $data = $this->model->search_email_user($email);
        include "view/view_search_email_user.php";
    }
    
    function lihat_data_request() {
        $data = $this->model->get_data_request();
        include "view/view_request.php";
    }
    
    function lihat_data_overtime() {
        $data = $this->model->get_data_overtime();
        include "view/view_overtime.php";
    }
    
    function lihat_data_activity() {
        $data = $this->model->get_data_activity();
        include "view/view_activity.php";
    }
    
    function lihat_data_sales_order() {
        $data = $this->model->get_data_sales_order();
        include "view/view_sales_order.php";
    }
    
    function lihat_data_customers() {
        $data = $this->model->get_data_customers();
        include "view/view_customers.php";
    }
    
    function lihat_data_adjustment_type() {
        $data = $this->model->get_data_adjustment_type();
        include "view/view_adjustment_type.php";
    }
    
    function lihat_data_allocation() {
        $data = $this->model->get_data_allocation();
        include "view/view_allocation.php";
    }
    
    function lihat_data_job_title() {
        $data = $this->model->get_data_job_title();
        include "view/view_job_title.php";
    }
    
    function lihat_data_package_mcu() {
        $data = $this->model->get_data_package_mcu();
        include "view/view_package_mcu.php";
    }
    
    function lihat_data_project_type() {
        $data = $this->model->get_data_project_type();
        include "view/view_project_type.php";
    }
    
    function lihat_data_status_bast() {
        $data = $this->model->get_data_status_bast();
        include "view/view_status_bast.php";
    }
    
    function lihat_data_so_bast() {
        $data = $this->model->get_data_so_bast();
        include "view/view_so_bast.php";
    }
    
    function lihat_list_api(){
        include "view/view_list_API.php";
    }
    
    function cek_employee_login($empl_nik){
        $data = $this->model->cek_nik_employee_login($empl_nik);
        include "view/view_cek_employee_login.php";
    }
    
    function fetch($result) {
        return mysqli_fetch_array($result);
    }

    function __destruct() {
        
    }

}
