<?php
session_start();
session_destroy();
header("Location: tugas_6_expert.php");
exit();
?>