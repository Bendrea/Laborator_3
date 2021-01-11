<?php 

    $nume_action = $_POST['nume_action'];
    $prenume_action = $_POST['prenume_action'];
    $varsta_action = $_POST['varsta_action'];
    require_once('conectareDB.php');
    
    if(isset($_POST['submit'])){
        if(empty($action)){
            echo "Please fill all fields";
        }
        else{
            $query = "INSERT INTO Datee(Nume,Prenume,Varsta) VALUES ('$nume_action', '$prenume_action', '$varsta_action')";
            $result = mysqli_query($con, $query);
            if($result){
                header("location:index.php");
            }
            else{
                echo "Can not insert into database";
            }
        }
    }
    else{
        header("location:index.php");
    }


    if(isset($_POST['update'])){
        $id = $_GET['id'];
        echo "<script> alert('".$id."')</script>";
        $Nume = $_POST['input_field'];
        echo "$name";

        $Prenume = $_POST['input_field'];
        echo "$Prenume";

        $Varsta = $_POST['input_field'];
        echo "$Varsta";

        $query="UPDATE Datee set Nume='".$Nume."' Prenume ='".$Prenume."' Varsta='".$Varsta."' where id='".$id."'";
        $result = mysqli_query($cont, $query);

        if($result){
            header("location:index.php");
        }else{
            echo "Can not update in database";
        }
    }
    else{
        header("location:index.php");
    }



    if(isset($_GET['DelID'])){
        $id = $_GET['DelId'];

        $query = "DELETE FROM Datee where id = '".$id."'";
        $result = mysqli_query($con, $query);
        if($result){
            header("location:index.php");
        }
        else{
            echo "Can not delete this task";
        }
    }

?>