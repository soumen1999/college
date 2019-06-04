<?php
$mysqli = new mysqli("localhost", "root", "pass", "testDB");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    if(isset($_POST['save'])){
        $sql = "INSERT INTO course (courseid, coursename, stream)
        VALUES ('".$_POST["courseid"]."','".$_POST["coursename"]."','".$_POST["stream"]."')";
    }
echo "<h2>Course entered successfully</h2>";
echo $courseid;
echo "<br>";
echo $coursename;
echo "<br>";
echo $stream;
echo "<br>";
    ?>
<?php
$mysqli = new mysqli("localhost", "root", "pass", "testDB");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    if(isset($_POST['save'])){
        $sql = "INSERT INTO course (courseid, coursename, stream)
        VALUES ('".$_POST["courseid"]."','".$_POST["coursename"]."','".$_POST["stream"]."')";
    }
echo "<h2>Course entered successfully</h2>";
echo $courseid;
echo "<br>";
echo $coursename;
echo "<br>";
echo $stream;
echo "<br>";
    ?>
