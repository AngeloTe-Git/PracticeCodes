<html>
  <body>
    <?php

    $card=$_POST['card'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $cvc=$_POST['cvc'];
    $recieve=$_POST['recieve'];
    $sttring="{\"data\":{\"attributes\":{\"details\":{\"card_number\":\"".$card."\",\"exp_month\":".$month.",\"exp_year\":".$year.",\"cvc\":\"".$cvc."\"},\"type\":\"card\"}}}";

    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api.paymongo.com/v1/payment_methods",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $sttring,
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Authorization: Basic cGtfdGVzdF81U1Zjc0ZZeldoZG9XdTNrajdtZmNjdjY6",
        "Content-Type: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $recieve;
      echo "<br><br><br><br><br>";
      echo $response;
      echo "<br><br><br><br><br>";
      $dcoder = json_decode($response);
      $mettid = $dcoder->data->id;
      echo $mettid;

    }?>

    <h1>Confirm Payment</h1>
    <form action="attachtopayment.php" method="post">
      Card no:<?php echo $card?><br>
      Month:<?php echo $month?><br>
      Year:<?php echo $year?><br>
      CVC:<?php echo $cvc?><br>
      <input type="hidden" name="method" value="<?php echo $mettid;?>">
      <input type="hidden" name="intent" value="<?php echo $recieve;?>">

      <button type="submit">Pay Now</button>
    </form>
  </body>
</html>
