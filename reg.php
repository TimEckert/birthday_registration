<?php
if (isset($_POST['name'])) {
  $name     = $_POST['name'];
  $plusOne  = $_POST['plusOne'];
  $presents = $_POST['presents'];
  $time     = $_POST['time'];
  $to       = 'birthday18@tim-eckert.com';
  $subject  = 'New Answer on Invitation';
  $body     = '<html>
                <body>
                  <h3>Answer:</h3>
                  <br />
                  <p>Name: '.$name.'</p>
                  <p>Plus One: '.$plusOne.'</p>
                  <p>Presents: '.$presents.'</p>
                  <p>Time: '.$time.'</p>
                </body>
              </html>';
  $headers =  "From: ".$name." <".$to.">\r\n";
  $headers .= "Reply-To: ".$to."\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset-utf-8";

  $send = mail($to, $subject, $body, $headers);
  if (true) {
    echo '<br />';
    echo 'Thank you for your reply.';
  } else {
    echo 'Oh, something went wrong, please try again.';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Mr. Eckert's Birthday Invitation</title>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Playfair+Display|Schoolbell" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js" charset="utf-8"></script>

  </head>

  <body>

    <header>
      <h3>VIP Invitation</h3>
    </header>

    <div id="container">

    <main id="form">
      <form id="regForm" action="" method="post">
          <!-- Name -->
          <label for="name" class="singleline"><strong>What is your name participant?</strong></label>
          <input type="text" name="name" oninput="DisplayName()" maxlength="25">

          <!-- +1 -->
          <label class="singleline"><strong>Are you bringing someone with you?</strong></label>
          <input type="checkbox" id="plusOne" name="plusOne" onchange="CheckboxEvent(1)"><label for="plusOne"> +1</label>

          <!-- Presents Value -->
          <label class="singleline"><strong>Please state the value of your presents.</strong> <br><i>So we can inform the security company.</i></label>
          <input type="radio" name="presents" value="fifty"       id="fifty"        onchange="CheckboxEvent(2)"><label for="fifty"> > 50</label>
          <input type="radio" name="presents" value="hundred"     id="hundred"      onchange="CheckboxEvent(3)"><label for="hundred"> > 100</label>
          <input type="radio" name="presents" value="twohundred"  id="twohundred"   onchange="CheckboxEvent(4)"><label for="twohundred"> > 200</label>
          <input type="radio" name="presents" value="fifehundred" id="fifehundred"  onchange="CheckboxEvent(5)"><label for="fifehundred"> > 500</label>

          <!-- Time -->
          <label class="singleline"><strong>Please state when do you want to ask for entrance.</strong></label>
          <input type="radio" name="time" value="afternoon" id="afternoon"  onchange="CheckboxEvent(6)"><label for="afternoon">16.00 Afternoon for coffee and cake</label>
          <input type="radio" name="time" value="night"     id="night"      onchange="CheckboxEvent(7)"><label for="night">19.00 At night for the party</label><br>
          <input type="radio" name="time" value="both"      id="both"       onchange="CheckboxEvent(8)"><label for="both">Both</label>

          <button class="cta cta-primary singleline" type="submit" name="regSummit">Please Submit My Answer</button>
      </form>
    </main>

    <aside id="summary">
      <div id="responseText">
        <span>My dearest Tim,</span> <br>
        <p id="response1">I, <span>your friend</span>, recieved your invitation with great pleasure.<br></p>
        <p id="response2">Since I was always a more pleasurable person <span>alone, I will bring noone</span> with me.<br>
        <p id="response3">Also, because I am so happy that you are in my life, I bring a <span>nice</span> present, to honour you.<br>
        <p id="response4">Looking forward to meeting you <span>finally</span>.<br>
        Uttermost respect and all yours,<br>
        <span id="signature">your friend</span></p>
      </div>

    </aside>

    <footer>

    </footer>

    </div>

  </body>
</html>
