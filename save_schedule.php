<?php
include('../dist/includes/dbcon.php');
$id = isset($_POST['id']) ? $_POST['id'] : '';
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
}

extract($_POST);
$allday = isset($allday);

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`faculty_id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES (177, '$title', '$description', '$start_datetime', '$end_datetime')";
} else {
    $sql = "UPDATE `schedule_list` SET `faculty_id` = '{$faculty}', `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' WHERE `id` = '{$id}'";
}

$save = $con->query($sql);

if ($save) {
    echo "<script> alert('Schedule Successfully Saved.'); window.location.href = 'calendar.php'; </script>";
} else {
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: " . $con->error . "<br>";
    echo "SQL: " . $sql . "<br>";
    echo "</pre>";
}
?>
