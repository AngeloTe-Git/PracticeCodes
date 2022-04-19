<html>
  <body>
    <?php

    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => "https://api.paymongo.com/v1/payment_intents",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "{\"data\":{\"attributes\":{\"amount\":10000000,\"payment_method_allowed\":[\"card\",\"paymaya\"],\"payment_method_options\":{\"card\":{\"request_three_d_secure\":\"any\"}},\"currency\":\"PHP\"}}}",
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Authorization: Basic cGtfdGVzdF81U1Zjc0ZZeldoZG9XdTNrajdtZmNjdjY6",
        "Content-Type: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $dcoder = json_decode($response);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
      $intid=$dcoder->data->id;
      echo $intid;
    }?>

    <h1>Pay with credit card</h1>
    <form action="paymentmethod.php" method="post">
      Card no:<input type="text" name="card"><br>
      Month:<input type="text" name="month"><br>
      Year:<input type="text" name="year"><br>
      CVC:<input type="text" name="cvc"><br>
      <input type="hidden" name="recieve" value="<?php echo $intid;?>">

      <button type="submit">Pay Now</button>


    </form>
  </body>
</html>



