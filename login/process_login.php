<?php
$validEmail = "petrusevaanna21@gmail.com"; 
$validPassword = "123456"; 

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === $validEmail && $password === $validPassword) {
    echo "Успешный вход!";
} else {
    echo "Неверные учетные данные. Попробуйте снова.";
}
?>
