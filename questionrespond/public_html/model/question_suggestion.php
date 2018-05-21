<?php


include('databaseClass.php');

$databaseClass = new databaseClass();

$connect = $databaseClass->connect();

$Question = $_POST['Question'];
$sql = "select q_id, username, question from questions where question LIKE '$Question%' order by question asc";
$result = mysqli_query($connect, $sql);//pulls question and puts it on same page
while($row=mysqli_fetch_assoc($result))//regular php echo loop to put on the page
{
    echo "<div class='askquestions'><img src='view/images/user.jpg' style='height: 50; width: 50;' ><a href='totalqs.php?q_id=".$row['q_id']."&question=".$row['question']."&username=".$row['username']."'><b>".$row['question']."</b></a></div>";

}
?>
