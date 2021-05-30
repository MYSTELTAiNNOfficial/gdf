<?php include_once("db-controller.php");

//function to read game database data
function readGamelist()
{
    $allData = array();
    $conn = my_connectDB();
    $sql_query = "SELECT * FROM uas.game";
    $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data['id'] = $row['id'];
            $data['name'] = $row['name_game'];
            $data['img'] = $row['img_link'];
            array_push($allData, $data);
        }
    }
    return $allData;
    my_closeDB($conn);
}


//function to save data game
function createGamelist($name_game, $img_link)
{
    if ($name_game != "" && $img_link != "") {
        $conn = my_connectDB();
        $sql_query = "INSERT INTO game (id, name_game, img_link)
                                VALUES (id ,'$name_game', '$img_link');";
        echo $sql_query;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    } else {
        return "Data still not completed";
    }
}

//function to delete data from game
function deleteGamelist($id)
{
    $result = 0;
    if ($id > 0) {
        $conn = my_connectDB();
        $sql = "DELETE FROM review WHERE id_game = $id ";
        $result1 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $sql_query = "DELETE FROM game WHERE id = $id ";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    }
    return $result;
}

//function to get data from game
function getGamelist($id)
{
    $data = array();
    if ($id > 0) {
        $conn = my_connectDB();
        $sql_query = "SELECT * FROM game WHERE id = $id";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row['id'];
                $data['name'] = $row['name_game'];
                $data['img'] = $row['img_link'];
            }
        }
        my_closeDB($conn);
        return $data;
    }
}

//function to update data from game
function updateGamelist($id, $name_game, $img_link)
{
    $result = 0;
    if ($id != "" && $name_game != "" && $img_link != "") {
        $conn = my_connectDB();
        $sql_query = "UPDATE game
                        SET name_game = '$name_game',
                            img_link = '$img_link'
                        WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    }
    return $result;
}
?>