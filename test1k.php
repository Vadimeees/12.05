<!DOCTYPE html>
<html>
<head>
  <title>Тест php</title>
</head>
<body>
<form method='get'>
<b>Что такое веб-разработка?</b><br>
<input name="answer[0]" type="radio" value="Bерно">Процесс создания веб-сайта или веб-приложения.<br>
<input name="answer[0]" type="radio" value="Неверно">Процесс производства сайтов, который состоит из технической разработки, создания удобной структуры веб-страницы, графического оформления и передачи информации в сеть.<br>
<input name="answer[0]" type="radio" value="Неверно">Процесс исследования ИС<br>
<br>
<b>Какие программы используются для просмотра Web-страниц в Интернете?</b><br>
<input name="answer[1]" type="radio" value="Неверно">MicroSoft Access или MicroSoft Word<br>
<input name="answer[1]" type="radio" value="Верно">Internet Explorer или Opera (Google Chrome)<br>
<input name="answer[1]" type="radio" value="Неверно">Visual Studio или Autocad<br>
<br>
<b>Что такое теги?</b><br>
<input name="answer[2]" type="radio" value="Верно">Команды, определяющие внешний вид Web-документа и формирующие связи с другими Web-ресурсами.<br>
<input name="answer[2]" type="radio" value="Неверно">Язык разметки гипертекста<br>
<input name="answer[2]" type="radio" value="Неверно">Группа страниц взаимосвязанных одной тематикой, единым авторством или единым владельцем<br>
<br>
<b>Что такое сайт?</b><br>
<input name="answer[3]" type="radio" value="Верно">Группа страниц взаимосвязанных одной тематикой, единым авторством или единым владельцем<br>
<input name="answer[3]" type="radio" value="Неверно">Связующее звено между веб-страницей и дополнительными технологиями, которые на ней будут использоваться<br>
<input name="answer[3]" type="radio" value="Неверно">Элемент языка программирования испльзующий программынй код для достпуа к новым ресурсам<br>
<br>
<b>Что такое HTML?</b><br>
<input name="answer[4]" type="radio" value="Неверно">Код, который используется для структурирования и отображения веб-страницы и её контента.<br>
<input name="answer[4]" type="radio" value="Неверно">Определённая взаимосвязь, взаиморасположение составных частей, строение, устройство чего-либо. <br>
<input name="answer[4]" type="radio" value="Верно">Полужирный шрифт<br>
<br>
<b>Что такое PHP?</b><br>
<input name="answer[5]" type="radio" value="Неверно">Определённая взаимосвязь, взаиморасположение составных частей; строение, устройство чего-либо.<br>
<input name="answer[5]" type="radio" value="Верно">Это серверный скриптовый язык программирования, предназначенный для создания сайтов и веб-приложений.<br>
<input name="answer[5]" type="radio" value="Неверно">Это ресурс, состоящий из веб-страниц<br>
<br>
    <b>Что делает данный фрагмент кода?
<br>if ($a < $b) {echo 'OK';}</b><br>
<input name="answer[6]" type="radio" value="Heверно">Если $a больше или равно $b выводит "OK"<br>
<input name="answer[6]" type="radio" value="Неверно">Если $a больше чем $b выводит "OK"<br>
<input name="answer[6]" type="radio" value="Верно">Если $a меньше чем $b выводит "OK"<br>
<br>
<b>Услуга размещения сайта на сервере, постоянно находящемся в сети Интернет</b><br>
<input name="answer[7]" type="radio" value="Неверно">Моделинг<br>
<input name="answer[7]" type="radio" value="Верно">Хостинг<br>
<input name="answer[7]" type="radio" value="Неверно">Стилинг<br>
<br>
<b>Чтобы отличать теги от текста, их заключают в</b><br>
<input name="answer[8]" type="radio" value="Неверно">Круглые скобки<br>
<input name="answer[8]" type="radio" value="Неверно">Квадратные скобки<br>
<input name="answer[8]" type="radio" value="Верно">Укгловые скобки<br>
<br>
<b>Какой из тегов служит для управления различными параметрами шрифтового оформления?</b><br>
<input name="answer[9]" type="radio" value="Неверно">H1<br>
<input name="answer[9]" type="radio" value="Неверно">POST<br>
<input name="answer[9]" type="radio" value="Верно">FONT<br>
<br>
<b>Пометить элемент списка можно с помощью тега?</b><br>
<input name="answer[10]" type="radio" value="Верно">UL<br>
<input name="answer[10]" type="radio" value="Неверно">OL<br>
<input name="answer[10]" type="radio" value="Неверно">LI<br>
<br>
<b>Для чего служит тег?</b><br>
<input name="answer[11]" type="radio" value="Верно">Для создания форм<br>
<input name="answer[11]" type="radio" value="Неверно">Для создания гиперссылки<br>
<input name="answer[11]" type="radio" value="Неверно">Для пометки элементов списка<br>
<br>
<b>Сайт можно создать воспользовавшись:</b><br>
<input name="answer[12]" type="radio" value="Неверно">Электронными таблицами<br>
<input name="answer[12]" type="radio" value="Неверно">Языком пргограммирования Pascal<br>
<input name="answer[12]" type="radio" value="Верно"> Языком разметки гипертекста HTML<br>
<input type='submit' name="Submit" value='Отправить'>
<br>
<br>
</form>
<?php
$k=0;
   if (is_array($_GET['answer'])){
   foreach($_GET['answer'] as $value) 
        {
         if ($value=='Верно') { 
         $k=$k+1;
        }
        echo $value, '<br>'; 
        }
  echo "У вас {$k} правильных ответов", '<br>'; 
      }
?>
</body>
</html>