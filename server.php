  
<?php 


$nume_action = $_POST['nume_action'];
$prenume_action = $_POST['prenume_action'];
$varsta_action = $_POST['varsta_action'];


echo '<script type="text/javascript">alert("'.$nume_action.'")</script>';

require_once("conectareDB.php");
if(isset($_POST['submit'])){
 if(empty($action)){
echo "Please fill all fields " ;
 }
 else {
    $query = "INSERT INTO Datee (Nume,Prenume,Varsta) VALUES ('$nume_action','$prenume_action','$varsta_action')";
    $result = mysqli_query($con,$query);
    if($result){
        header("location:index.php");

    }
    else{
        echo" can not insert into database";
    }
 }
}
else{
    header("location:index.php");
}


if(isset($_POST['update'])){
    $id=$_GET['id'];
  echo "<script> alert('".$id."')</script>";
    $name=$_POST['Nume'];
    $prenume = $_POST['Prenume'];
    $varsta = $_POST['Varsta'];
    echo $name, $prenume, $varsta;
    $query="update Datee set Nume='".$name."',Prenume='".$prenume."',Varsta='".$varsta."' where id='".$id."'";
    $result=mysqli_query($con,$query);
    if($result){
        header("location:index.php");
    }else{
        echo "can not update in database";
    }
}
else{
    header("location:index.php");
}


if(isset($_GET['DelID'])){
$id=$_GET['DelID'];

$query="delete from Datee where id='".$id."'";
$result=mysqli_query($con,$query);
if($result){
    header("location:index.php");
}else{
    echo" can not delete this task";
}

}
?>