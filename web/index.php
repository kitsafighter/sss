<?php
session_start();
// include 'index.html';
// if (in_array($_SESSION['user_name'])) {
//     echo "Hello, bro";
// };
if (isset($_SESSION['user_name'])) {
    echo 'Hello, ' . $_SESSION['user_name'];
    echo '</br><a href = "exit.php">Закрыть</a>';
} else {
    include 'index.html';
};
// session_destroy();
