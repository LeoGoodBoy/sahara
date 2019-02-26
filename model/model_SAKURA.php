<?php

class model_SAKURA {

    function __construct() {
        
    }

    function execute($query) {
        $connect = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connect, "sakura");
        return mysqli_query($connect, $query);
    }

    function get_data_master_user() {
        $query = "select * from master_employee";
        return $this->execute($query);
    }
    
    function get_data_user() {
        $query = "select * from user";
        return $this->execute($query);
    }
    
    function get_data_allowance() {
        $query = "select * from allowance";
        return $this->execute($query);
    }
    
    function get_data_contract() {
        $query = "select * from contract";
        return $this->execute($query);
    }
    
    function get_data_sales_order() {
        $query = "select * from sales_order";
        return $this->execute($query);
    }
    
    function get_data_employee_login() {
        $query = "select * from employee_login";
        return $this->execute($query);
    }
    
    function get_data_roles() {
        $query = "select * from roles";
        return $this->execute($query);
    }
    
    function get_data_roles_employee() {
        $query = "select * from roles_employee";
        return $this->execute($query);
    }
    
    function search_email_master_employee($email){
        $query = "select * from master_employee where email = '$email'";
        return $this->execute($query);
    }
    
    function search_email_user($email){
        $query = "select * from user where email = '$email'";
        return $this->execute($query);
    }
    
    function get_data_overtime() {
        $query = "select * from overtime";
        return $this->execute($query);
    }
    
    function get_data_request() {
        $query = "select * from request";
        return $this->execute($query);
    }
    
    function get_data_activity() {
        $query = "select * from activity";
        return $this->execute($query);
    }
    
    function get_data_vendor_mcu() {
        $query = "select * from vendor_mcu";
        return $this->execute($query);
    }
    
    function get_data_customers() {
        $query = "select * from customers";
        return $this->execute($query);
    }
    
    function get_data_adjustment_type() {
        $query = "select * from adjustment_type";
        return $this->execute($query);
    }
    
    function get_data_allocation() {
        $query = "select * from allocation";
        return $this->execute($query);
    }
    
    function get_data_job_title() {
        $query = "select * from job_title";
        return $this->execute($query);
    }
    
    function get_data_package_mcu() {
        $query = "select * from package_mcu";
        return $this->execute($query);
    }
    
    function get_data_project_type() {
        $query = "select * from project_type";
        return $this->execute($query);
    }
    
    function get_data_status_bast() {
        $query = "select * from status_bast";
        return $this->execute($query);
    }
    
    function get_data_so_bast() {
        $query = "select * from so_bast";
        return $this->execute($query);
    }
    
    function cek_nik_employee_login($empl_nik){
        $query = "select * from employee_login where empl_nik = '$empl_nik'";
        return $this->execute($query);
    }
    
    function get_data_chart_level1() {
        $query = "SELECT DISTINCT contract_status,COUNT(*) as Jumlah FROM contract group by contract_status";
        return $this->execute($query);
    }
    
    function get_data_chart_level2() {
        $query = "SELECT distinct c.contract_status, a.location, (SELECT COUNT(*) FROM allocation al JOIN contract 
                crt ON al.empl_nik=crt.empl_nik WHERE crt.contract_status = c.contract_status ) as 
                Jumlah FROM Allocation a INNER JOIN contract c ON a.empl_nik=c.empl_nik order by contract_status asc";
        return $this->execute($query);
    }
    
    function get_data_chart_level3() {
        $query = "SELECT distinct c.contract_status, a.location, cs.customer_name, (SELECT COUNT(*) FROM allocation al
            JOIN contract crt ON al.empl_nik=crt.empl_nik JOIN sales_order sord ON al.so_id=sord.so_id JOIN customers 
            cst ON sord.customer_id = cst.customer_id WHERE crt.contract_status = c.contract_status AND 
            cst.customer_name=cs.customer_name ) as Jumlah FROM Allocation a INNER JOIN contract c ON 
            a.empl_nik=c.empl_nik JOIN sales_order so ON a.so_id=so.so_id JOIN customers cs ON 
            so.customer_id = cs.customer_id order by contract_status asc";
        return $this->execute($query);
    }

    function fetch($result) {
        return mysqli_fetch_array($result);
    }
    
    function __destruct() {
        
    }

}
