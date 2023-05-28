<meta charset="utf-8">
<h1>Работа с логом</h1>
<?php
  $f = '<h2>Форма для заполнения</h2>';
  if ($_SERVER['REQUEST_METHOD']==='POST') {
    $r = htmlentities($_POST['message']) ?? 'Пустое сообщение';

    $f = fopen('log.txt', 'a');
    fwrite($f, $r);
    fwrite($f, "\n");
    fclose($f);

    $f = '<style>.right {width: 60%; margin-left: 35%; zoom: 80%}</style>';
    $f .= '<div class="right><h2>Добавить ещё один отзыв</h2></div>';
    echo '<h3 style="color:green">Данные успешно добавлены</h3>';
  }
  echo $f;
  echo "<div class=\"right\">";
  echo "<form method=\"post\">";
  echo <<<_END
      <div>
        <label>Сообщение</label>
        <input id="message" name="message" required="required" type="text">
        <button type="submit">Отправить сообщение</button>
      </div>
_END;
  echo "</form></div>";
  echo "<h2>Список отзывов</h2>\n";
  echo require_once('list.php');
?>