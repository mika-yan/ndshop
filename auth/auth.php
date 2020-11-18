<?php 
  require "../db/db.php";  // Подключаем файл для базы данных
  $data = $_POST;
  if(isset($data['do_login'])) {
  $errors = array();
  $user =  R::findOne('users', 'login = ?',array($data['login']));
  if ($user) 
  { 
   
   if(password_verify($data['password'], $user->password))
   {

  $_SESSION['logged_user'] = $user;  // Если все верно,проходим авторизацию
  


  //  header('Location: dashboard/dashboard.php'); // Редирект в временный личный кабинет
   header('Location: ../acount.php');
        
   } else 

   {  

      $errors[] = 'Неверно введен пароль';
   } 
   

  } 


  else 
  {

   $errors[] = 'Пользователь не найден'; 
    
  }

  if ( ! empty($errors)) {
    echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
  }

  }


?>