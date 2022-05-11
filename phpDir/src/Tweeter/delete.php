<?php
    //Delete WORKS - Fixed the delete refresh issue. This must before the "SELECT * FROM blogTable"
    if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM blogTable WHERE id=".$id);
    
    } 

?>