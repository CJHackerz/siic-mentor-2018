<?php
    include '../_require/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-type: application/json');
        session_start();

        $user       = $_SESSION["email"] ;
        // $team_set   = $_SESSION['team'];
        $team_id    = $_POST['team_id'];

            $sql = "SELECT * from mentor_members where team_id = '$team_id'";

            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                $response_array['status'] = 'error';
            }
            else {
                $sql = "INSERT INTO mentor_members(email,team_id,status) VALUES('$user','$team_id','requested')";
                    $conn->query($sql);
                    $response_array['status'] = 'success';
            }
             echo json_encode($response_array);

    }
?>
