<?php
 include_once("db-controller.php");

 function readProfile(){
    $allData = array();
    $conn = my_connectDB();

    if($conn!=NULL){
        $sql_query = "SELECT * FROM `profile`";
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $data['id'] = $row["id"];
                $data['user'] = $row["username"];
                $data['email'] = $row["email"];
                $data['birth'] = $row["birthday"];
                $data['pass'] = $row["password"];
                $data['hobby'] = $row["hobby"];
                $data['title'] = $row["title"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}

//function to save data 
function createProfile($id, $user, $email, $birth, $pass, $hobby, $title){
    if($id!="" && $user!="" && $email!="" && $birth!="" && $pass!="" && $hobby!="" && $title!=""){
        $conn = my_connectDB();
        $sql_query = "INSERT INTO 'profile' ('id','username', 'email', 'birthday', 'password', 'hobby', 'title')
                                VALUES (NULL, '$user', '$email','$birth','$pass','$hobby','$title',);";
        echo $sql_query;
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    }else{
        return "Data still not completed";
    }
}

//function to delete profile
function deleteProfile($id){
    $result=0;
    if($id>0){
        $conn = my_connectDB();
        $sql_query = "DELETE FROM 'profile' WHERE 'id' = ".$id;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    }
    return $result;
}

//function to get data from profile
function getProfile($id){
    $data = array();
    if($id>0){
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM 'profile' WHERE 'id' = ".$id;
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $data['id'] = $row["id"];
                $data['user'] = $row["username"];
                $data['email'] = $row["email"];
                $data['birth'] = $row["birthday"];
                $data['pass'] = $row["password"];
                $data['hobby'] = $row["hobby"];
                $data['title'] = $row["title"];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

//function to update data from game
function updateProfile($id, $user, $email, $birth, $pass, $hobby, $title){
    $result=0;
    if($id!="" && $user!="" && $email!="" && $birth!="" && $pass!="" && $hobby!="" && $title!=""){
        $conn = my_connectDB();
        $sql_query = "UPDATE 'profile'
                        SET 'username' = '$user',
                            'email' = '$email',
                            'birthday' = '$birth',
                            'password' = '$pass',
                            'hobby' = '$hobby',
                            'title' = '$title',
                        WHERE 'id' = $id;";
        $result = mysqli_query($conn,$sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    }
    return $result;
}

?>

