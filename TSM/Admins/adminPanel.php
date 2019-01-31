



<?php  include('css/style.css'); ?>


<?php




$connection = mysqli_connect('localhost', 'malkhudc_TSM', '1m4a1m2K', 'malkhudc_TSM-2018');



$query = "SELECT * FROM tutorForm";
    $selectTutorForm = mysqli_query($connection,$query);  

    while($row = mysqli_fetch_assoc($selectTutorForm)) {
    $tform_id = $row['tform_id'];
    $tform_GBA = $row['tform_GBA'];
    $tform_skill = $row['tform_skill'];
    
    echo "<table id='t01'>
<tr>
<th>ID</th>
<th>GPA</th>
<th>SKILL</th>
<th>Accept</th>
<th>Reject</th>
</tr>";

    echo "<tr>";
    echo "<td>{$tform_id}</td>";
    echo "<td>{$tform_GBA}</td>";
    echo "<td>{$tform_skill}</td>";
    echo '<td><a href="upTutor.php?tform_id=' . $row['tform_id'] . '">Accept</a></td>';
    echo '<td><a href="upTutor.php?tform_id=' . $row['tform_id'] . '">Reject</a></td>';
    echo "</tr>";


}
    
    echo "</table>";
    
    
    

?>
