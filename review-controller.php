<?php
include_once "db-controller.php";

function getReviewByGameID($id_game)
{
    $reviewdata = array();
    $conn = my_connectDB();

    $sql = "SELECT * FROM review WHERE id_game='$id_game'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_assoc($result)) {
        $data['id'] = $row["id"];
        $data['id_game'] = $row["id_game"];
        $data['id_user'] = $row["id_user"];
        $data['name_game'] = $row["name_game"];
        $data['name_user'] = $row["name_user"];
        $data['comment'] = $row["comment"];
        $data['likes_count'] = $row["likes_count"];
        $data['created'] = $row['created'];
        array_push($reviewdata, $data);
    }

    my_closeDB($conn);
    return $reviewdata;
}

function getReviewByNewerDate()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM review ORDER BY created DESC";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["id"];
                $data['id_game'] = $row["id_game"];
                $data['id_user'] = $row["id_user"];
                $data['name_game'] = $row["name_game"];
                $data['name_user'] = $row["name_user"];
                $data['comment'] = $row["comment"];
                $data['likes_count'] = $row["likes_count"];
                $data['created'] = $row["created"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}
function getReviewByLikes()
{
    $allData = array();
    $conn = my_connectDB();

    if ($conn != NULL) {
        $sql_query = "SELECT * FROM review ORDER BY likes_count ASC";
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['id'] = $row["id"];
                $data['id_game'] = $row["id_game"];
                $data['id_user'] = $row["id_user"];
                $data['name_game'] = $row["name_game"];
                $data['name_user'] = $row["name_user"];
                $data['comment'] = $row["comment"];
                $data['likes_count'] = $row["likes_count"];
                $data['created'] = $row["created"];
                array_push($allData, $data);
            }
        }
    }
    my_closeDB($conn);
    return $allData;
}
function createReview($id_game, $id_user, $name_game, $name_user, $comment)
{
    if ($comment != "") {
        $likes = 0;
        $conn = my_connectDB();
        $created = timeDB();
        $sql_query = "INSERT INTO review (id, id_game, id_user, name_game, name_user, comment, likes_count, created)
                                        VALUES (NULL, '$id_game', '$id_user','$name_game','$name_user','$comment','$likes','$created');";
        echo $sql_query;
        $result = mysqli_query($conn, $sql_query) or die(mysqli_error($conn));
        my_closeDB($conn);
    } else {
        return "Data still not completed";
    }
}

