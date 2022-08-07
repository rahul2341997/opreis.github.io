<?php
require_once("C:/xampp/htdocs/Opreis/wp-config.php");
    global $wpdb;
    $wpdb->show_errors();
$response = array(
    'status' => 0,
    'message' => 'form submission faild'
);
$errorEmpty = false;
$errorEmail = false;
if ( isset( $_POST['name'] ) || isset( $_POST['email'] ) || isset( $_POST['password'] ) ){
    
    // $response['message'] = "Full Name";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['re-enter'];

    if(!empty($name) && !empty($email) && !empty($password) && !empty($repassword)){
       
        // if(!filter_var($email,FILTER_VALLIDATE_EMAIL)){

        //     $response['message']="invalid emial";
        //     $errorEmail = true;
        // }
        if($password == $repassword ) {
            $response['message'] = "form submited successfuly";
        }else{
            $response['message'] = "please enter same password";
        }        
    }else{
        $response['message'] = "do not empty any feild";
        // $errorEmpty = true;
    }





    if( $response['message'] == "form submited successfuly" ) {
        
        $tablename = $wpdb->prefix.'reg_user';
        $wpdb->insert( $tablename, array(
            'name' => $_POST['name'], 
            'email' => $_POST['email'], 
            'password' => $_POST['password']),
        //    array( '%s', '%s', '%s') 
        );
            

        $response = array(
            'status' => 1,
            'message' => 'form submited successfuly done!'
        );
    }
}
echo json_encode($response);






?>