<?php

// if (empty($_POST['file_name']) OR !is_uploaded_file($_FILES['content']['tmp_name'])) {
//     header("Location: index.html");
// } else {
//     $_FILES['content']['name'] = $_POST['file_name'];
//     $uploaddir = 'C:\Users\kicin\Desktop\PHP kurs\glava7\ ';
//     $uploadfile = $uploaddir . basename($_FILES['content']['name']); 
//     // move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile);
//     if (move_uploaded_file($_FILES['content']['tmp_name'], $uploadfile)) {
//         echo "Файл корректен и был успешно загружен.\n";
//     } else {
//         echo "Возможная атака с помощью файловой загрузки!\n";
//     }
// }

session_start();
$_SESSION['user_name']=$_POST['user_name'];
// echo $_SESSION['user_name'];

header("Location: index.php");