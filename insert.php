<!DOCTYPE html>
<html>
    <body>
    <?php
          //session_start();
           // echo $_POST['uname']."  ".$_POST['pass'];
          $data= array($_POST['uname'],$_POST['pass']);
            echo $data [0]." ".$data[1];


        $user ='root';
        $pass='';
        $db  ='test1';

        $db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');
        echo 'done '. "<br>";

        $qry="
                select p
                from user
                where u='$data[0]'
        
        ";
    $res= $db_connect-> query($qry)or die('ban query');

    //$n=$res->num_rows;

    $row=$res->fetch_assoc();

    if($row['p']==$data[1])
    {
        echo'logged in';

    }
    else 
    echo 'error';

    ?>

</body>
</html>