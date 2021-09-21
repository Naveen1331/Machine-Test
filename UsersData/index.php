
          <?php
          $connect = mysqli_connect("localhost", "root", "", "test"); //Connect PHP to MySQL Database
          $query = '';
          $table_data = '';
          $filename = "data.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $sql= "INSERT INTO datainserted(userId, id, title, body) VALUES ('".$row["userId"]."', '".$row["id"]."', '".$row["title"]."', '".$row["body"]."'); ";  // Make Multiple Insert Query 
            mysqli_query($connect, $sql);
          }
echo "Employee Data Inserted";