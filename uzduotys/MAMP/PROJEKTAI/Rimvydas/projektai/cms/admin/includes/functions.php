
<?php 

function confirmQuery($result){
    global $dbConnect;
     if(!$result){
            die("QUERY FAILED" . mysqli_error($dbConnect));
        }
  
}




function errorCheck ($result){
    global $dbConnect;
    
     if (!$result){
            die("QUERY FAILED " . mysqli_error($dbConnect));
            
        }
    
}

function insert_categories(){
    
    global $dbConnect;
    
      if (isset($_POST['submit'])){

                    $newCategory = $_POST['cat_title'];

                if ($newCategory !== ""){

                $query = "INSERT INTO categories(cat_title)" . "VALUES ('{$newCategory}')";

                $result = mysqli_query($dbConnect, $query);
                    echo "<div class='alert alert-success'>Categorie Added</div>";
                    
                if (!$result){
                die("Query failed" . mysqli_error($dbConnect));
                    }
                }else {
                        echo "<div class='alert alert-danger'>Please specify a name</div>";
 
            }
      } 
}


function findAllCategories(){
     global $dbConnect;
    
    // Query for IDS and CATEGORY TITLE  

    $query = "SELECT * FROM categories";
    $select_categories_table = mysqli_query($dbConnect, $query);

    //LOOP FOR DISPLAYING TABLE DATA

        while ($row = mysqli_fetch_assoc($select_categories_table )) {

        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

        echo"<tr>";    
        echo "<td>{$cat_id}</td>";
        echo "<td>
        {$cat_title}<a data-toggle='tooltip' title='Delete' data-placement='top' href='categories.php?delete={$cat_id}'><span class='glyphicon glyphicon-remove
        '></span></a>
        <a data-toggle='tooltip' title='Edit' data-placement='top' href='categories.php?update={$cat_id}'><span class='glyphicon glyphicon-pencil
        '></span></a>

        </td>";

        echo"</tr>"; 
        }

    
    
}


function deleteCategorie(){
    global $dbConnect;
    
         if(isset($_GET['delete'])){
                 
        $delete_cat_id = $_GET['delete'];
                
         $query = "DELETE FROM categories WHERE cat_id = {$delete_cat_id} ";
         $delete_query = mysqli_query($dbConnect, $query);
         header("Location: categories.php");
             
             
                 
             }
}

?>