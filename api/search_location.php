<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	require_once("connect.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$params = json_decode(file_get_contents("php://input"), true);

		if(isset($params['auth_key']) && isset($params['query'])){

			$auth_key = mysqli_real_escape_string($con,$params['auth_key']);
			$auth_key = htmlentities($auth_key);

            $query = mysqli_real_escape_string($con,$params['query']);
			$query = htmlentities($query);
			
			$skip = isset($params['skip']) ? $params['skip'] : 0;
			$top = isset($params['top']) ? $params['top'] : 10;

			$query1 = "SELECT svm.id, svm.name, sscm.name as sub_city_name, scm.name as city, ssm.name as state 
			FROM sk_village_master as svm 
			JOIN sk_sub_city_master as sscm ON sscm.id = svm.sub_city_id 
			JOIN sk_city_master as scm ON scm.id = sscm.city_id 
			JOIN sk_state_master as ssm ON ssm.id = scm.state_id 
			WHERE svm.name LIKE '%{$query}%' ORDER BY name LIMIT 0, 15";

            $run1 = mysqli_query($con, $query1);
            if(mysqli_num_rows($run1)){
            	while($row1 = mysqli_fetch_assoc($run1)){
	                $message[] = array(
	                    'id' => $row1['id'],
	                    'name'=> $row1['name'],
	                    'sub_city_name'=> $row1['sub_city_name'],
	                    'city' => $row1['city'],
	                    'state' => $row1['state'],
	                );
            	}
                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'Record found', 'result'=>$message));
            }else{
                echo json_encode(array('status'=> 1, 'code'=>200, 'message'=>'No record found'));
            }
		}else{
			echo json_encode(array("status" => 0, "code"=> 400, "message" => "Unauthorized"));
		}
	}else{
		echo json_encode(array("status" => 0, 'code'=> 405, "message" => "Method Not Allowed"));
	}



?>