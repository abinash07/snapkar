<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);
		if(isset($params['auth_key'])){
			$auth_key = mysqli_real_escape_string($con,$params['auth_key']);
			$auth_key = htmlentities($auth_key);

            $query = "SELECT * FROM sk_user WHERE auth_key = '$auth_key'";
            $run = mysqli_query($con, $query);
            if(mysqli_num_rows($run)){
                echo json_encode(array('status' => 1, "code"=> 200, 'message' => 'Valid Auth Key'));
            }else{
                echo json_encode(array("status" => 0, "code"=> 400, "message" => "In Valid Auth Key"));
            }
		}else{
			echo json_encode(array("status" => false, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => false, 'code'=> 405, "message" => "Method Not Allowed"));
	}
?>