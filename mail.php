<?php
  //Принять данные из пост массива:
  //создаем переменные
  $fio = $_POST['fio'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];

  //проводим переменные через "фильтры", для защиты данных
    //преобразуем символы
  $fio = htmlspecialchars($fio);
  $tel = htmlspecialchars($tel);
  $email = htmlspecialchars($email);
    //декодируем url, при попытке добавить его в форму
  $fio = urldecode($fio);
  $tel = urldecode($tel);
  $email = urldecode($email);
    //удалим пробелы с начала и конца строки, если такие имеются
  $fio = trim($fio);
  $tel = trim($tel);
  $email = trim($email);


  mail("helga.fl315@mail.ru", "Заявка с сайта", "ФИО: ".$fio.". Tel: ".$tel.". E-mail: ".$email ,"From: aleks.andin315@ya.ru \r\n");


  if (mail("helga.fl315@mail.ru", "Заявка с сайта", "ФИО: ".$fio.". Tel: ".$tel.". E-mail: ".$email ,"From: aleks.andin315@ya.ru \r\n")) {
  header("Location: http://shketina.ru");
//   echo '<script>
//       confirm( "Hello world" );
//     </script>';
  } else {
    echo "при отправке сообщения возникли ошибки";
  }
?>
