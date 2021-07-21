<?php
if(isset($_POST['fileName'])){
    rename("./repository_pending/".$_POST['fileName'], "./repository_approved/".$_POST['fileName']);
} else {
    echo "<a href='./moderateArcc.php'> Click here to approve files...</a>";
}

?>
