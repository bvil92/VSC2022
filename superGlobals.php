
<!DOCTYPE html>
<html>
<body>

<form action method="post" target="_self">
      <label for="name">Ditt namn: </label> <input type="text" id="name" name="name">
    <br>
      <label for="email">Dit mejladress: </label> <input type="email" id="email" name="email">
    <br>
      <label for="theme">Ämne meddelande </label> <input type="text" id="topic" name="Meddelande"><br>
      <label for="message">Ditt meddelande</label> <textarea name="message" rows="1" cols="20" id="message">Meddelande</textarea>
    <br><br>
      <input type="submit" value="Skicka meddelande"></form><br><br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $topic = $_REQUEST['Meddelande'];
  $message = $_REQUEST['message'];
  if (empty($name)) {
    echo "<br> <b>No name</b>";
  }
  else {
    echo '<b>Ditt namn</b>: <i>', $name, '</i><br>';
  }
  if (empty($email)) {
      echo "<br> <b>Mejl is empty/<b>";
    }
    else {
      echo '<br><b>Dit mejladress</b>: <i>', $email, '</i><br>';
    }
  if (empty($topic)) {
          echo "<br> <b>There is no topic</b>";
        }
        else {
          echo '<br><b>Ämne meddelande</b>: <i>', $topic, '</i><br>';
        }
    if (empty($message)) {
      echo "<br> <b>There is no message</b>";
                }
         else {
         echo '<br><b>Ditt meddelande</b>: <i>', $message, '</i><br>';
                }
}
?>

</body>
</html>
