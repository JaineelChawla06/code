 <!-- DISPLAY DATA START-->
<table border="2px">
        <tr>
        <th>ID</th>
        <th>STUDENT NAME</th>
        <th>GENDER</th>
        <th>E-MAIL</th>
        <th>PASSWORD</th>
        </tr>
        <?php
        include 'connection.php';
        $sql="select * from stud";
        $res=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($res)){
        ?>
        <tr class="text-center">
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['name'] ?>
            </td>
            <td>
                <?php echo $row['gender'] ?>
            </td>
            <td>
                <?php echo $row['mail'] ?>
            </td>
            <td>
                <?php echo $row['password'] ?>
            </td>
            <td>
            <button><a href="crud.php?uid=<?php echo $row['id']?>">UPDATE</a></button>
            </td>
            <td>
            <button><a href="crud.php?did=<?php echo $row['id']?>">DELETE</a></button>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <!-- DISPLAY DATA END -->