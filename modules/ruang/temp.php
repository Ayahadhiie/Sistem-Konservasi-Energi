
    //buat data json
 	$connection = mysqli_connect("localhost","root","","app") or die("Error " . mysqli_error($connection));
	$user_id = $_SESSION['user_id'];
    //fetch table rows from mysql db
    $sql = "select * from ruang where user_id=".$user_id."";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

	$fp = fopen('modules/ruang/data.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
    mysqli_close($connection);