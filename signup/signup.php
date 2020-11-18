<?php 
require "../db/db.php";
$data = $_POST;
if(isset($data['do_signup'])) {
  

   $errors = array();
   if ($data['login'] == '') {

     $errors[] = 'Введите логин';
     
   }
    
   /*if($data['email'] == '') {

     $errors[] = 'Введите E-mail';
     
   }*/
     
   if($data['password'] == '') {

     $errors[] = 'Введите пароль';
     
   }

    /*if($data['number_phone'] == '') {

     $errors[] = 'Введите ваш номер телефона';
     
   }

     
   if($data['password_2'] != $data['password']) {

     $errors[] = 'Пароли не совпадают';
     
   }*/
if(R::count('users', "login = ?",array($data['login'])) > 0 ){

     $errors[] = 'Пользователь с таким логином уже существует';
     
   }

   if(R::count('users', "email = ?",array($data['email'])) > 0 ){

     $errors[] = 'Пользователь с такой электронной почтой уже существует';
     
   }
   
    if(R::count('users', "number_phone = ?",array($data['number_phone'])) > 0 ){

     $errors[] = 'Пользователь с таким номером мобильного телефона уже существует';
     
   }


   if (empty($errors)) {
     # Регистрируемся

      
    $user = R::dispense('users');
    $user -> login = $data['login'];
    $user -> email = $data['email'];
    $user -> number_phone = $data['number_phone'];
    $user -> password = password_hash($data['password'], PASSWORD_DEFAULT);
    R::store($user);
    echo '<div style="color: green;">Вы успешно зарегистрировались<br><a href="/auth/auth.php/login.php">Войти</a></div><hr';
     header('Location: /acount.php');

   } else{
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
   }
}
?>