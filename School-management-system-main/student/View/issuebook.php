<?php
$title= "Issue Book History";
include('header.php');
include_once('../model/DatabaseConnection.php');
$student_id = $_COOKIE['id'];
$viewhistory = getRequestedBook($student_id);

?>

<?php include('sideBar.php'); //var_dump($viewhistory);?> 
<td>
            <fieldset>
                <legend>Issue Book History</legend>
            <form class="" action="" method="post"> 
               <table>

               <tr>
                <td>ID</td> 
                <td>:</td>
                <td><?php echo $student_id; ?></td>
               </tr>

               <tr>
                <td>Book Name</td> 
                <td>:</td>
                <td><?php echo $viewhistory['title']; ?></td>
               </tr>

               <tr>
                <td>Issue Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['requestdate']; ?></td>
               </tr>
               <!-- <tr>
                <td>Return Date</td> 
                <td>:</td>
                <td><?php echo $viewhistory['returndate']; ?></td>
               </tr>
               <tr>
                <td>Fine</td> 
                <td>:</td>
                <td><?php echo $viewhistory['fine']; ?></td>
               </tr> -->

               </table>
               
            </form>
            </fieldset>
        </td>
      </tr>

      <?php include('footer.php'); ?>
      <style>
h1 {
  background-color: seagreen;
}
</style>