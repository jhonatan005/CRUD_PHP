<?php
if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from colaboradores where id=$id");
    if ($sql==1){
        echo "<div></div>";
    }else{
        echo "<div>error al eliminar</div>";
    }
}
?>