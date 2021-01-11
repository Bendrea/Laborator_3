<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php

require_once("conectareDB.php");
$query=" select * from Datee";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" a href="bootstrap.css">

</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h1 class="bg-success text-white text-center py-3">Add a new task </h1>
                    </div>
                    <div class="card-body">
                        <form action="server.php" method="POST">
                          
                                <input type="text" class="from-control" placeholder="Nume"
                                 name="nume_action">

                                 <input type="text" class="from-control" placeholder="Prenume"
                                 name="prenume_action">

                                 <input type="text" class="from-control" placeholder="Varsta"
                                 name="varsta_action">
                            
                            
                            <button class="btn-primary" name="submit">Save</button>
                        </form>

                    </div>
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">What you need to do for today </h3>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td>#</td>
                            <td>Denumire</td>
                            <td>Edit</td>
                            <td>Edit</td>

                        </tr>

                        <?php
                        
                              while($row=mysqli_fetch_assoc($result))
                              {
                                $id= $row['id'];
                                $name=$row['Nume'];
                                $prenume= $row['Prenume'];
                                $varsta = $row['Varsta'];
                              
                              
                          ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $prenume ?></td>
                            <td><?php echo $varsta ?></td>
                            <td><a href="editare.php?GetID=<?php echo $id?>">Edit</a></td>
                            <td><a href="server.php?DelID=<?php echo $id?>">Delete</a></td>
                        </tr>
                        <?php
                              }
                        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>