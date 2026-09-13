<html>
<body>

<?php
        $server = "localhost";
        $username ="root";
        $password = "";
        $dbname = "kh";

        $conn = mysqli_connect($server,$username,$password,$dbname);

        if(isset($_POST['submit'])){
            if(!empty($_POST['name']) && )
                $name = $_POST['name'];
                $email = $_POST['email'];
                $adult = $_POST['adult'];
                $child = $_POST['child'];
                $rooms = $_POST['rooms'];
                $msg = $_POST['msg'];

                $query = "insert into kh(name,email,adult,child,rooms,msg) values('$name','$email','$adult','$child','$rooms','$msg')";

                $run = mysqli_query($conn,$query) or die(mysqli_error());

                if($run){
                    echo "FORM SUBMITTED SUCCESSFULLY";
                }
                else{
                    echo "FORM NOT SUBMITTED";
                }
            }
    ?>
    </body>
    </html>
