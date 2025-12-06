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
            	$row = mysqli_fetch_assoc($run);
                $userid = $row['userid'];
  
	            $query1 = "SELECT * FROM sk_state_master WHERE status = 1";
	            $run1 = mysqli_query($con, $query1);
	            if(mysqli_num_rows($run1)){
	            	while($row1 = mysqli_fetch_assoc($run1)){
		                $response[] = array(
		                    'id' => (int)$row1['id'],
		                    'name'=> $row1['name'],
		                );
	            	}
	                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'Record found', 'result'=>$response));
	            }else{
	                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'No record found', 'result'=>[]));
	            }
	        }else{
                echo json_encode(array("status" => 0, "code"=> 400, "message" => "In Valid Authkey"));
            }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}
?>