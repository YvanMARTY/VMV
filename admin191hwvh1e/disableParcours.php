<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $db = Db::getInstance();
    $db->delete('parcours', 'prc_id='.$id);
    
}
else{

}

?>