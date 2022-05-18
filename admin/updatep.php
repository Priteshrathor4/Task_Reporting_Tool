<?php
include("connection.php");

if (isset($_POST['submitU'])) {
    $id = $_GET['id'];

    $projectnameU = $_POST['projectnameU'];
    $startdateU = $_POST['startdateU'];
    $enddateU = $_POST['enddateU'];
    $Textarea1U = $_POST['Textarea1U'];
    $techU = $_POST['techU'];
    $objU = $_POST['objU'];


    $query = "UPDATE project SET name='$projectnameU', startdate='$startdateU', enddate='$enddateU', details='$Textarea1U' , technology='$techU', objective='$objU', update=CURRENT_DATE WHERE id=$id ";
    $query_run = pg_query($db, $query);

    if ($query_run) {
        echo "Data Updated";
?>
        <script>
            window.location.href = 'opertion.php';
        </script>
<?php
    } else {
        echo "Data Not Updated";
    }
}
?>