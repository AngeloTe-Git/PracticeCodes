<html>
  <body>
    <?php
    $mettid=$_POST['method'];
    $intid=$_POST['intent'];
    $intstr="https://api.paymongo.com/v1/payment_intents/".$intid."/attach";
    $metstr="{\"data\":{\"attributes\":{\"payment_method\":\"".$mettid."\"}}}";

    
    $curl = curl_init();

    curl_setopt_array($curl, [
      CURLOPT_URL => $intstr,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $metstr,
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Authorization: Basic c2tfdGVzdF96NUJrRHY2ejh5Wnc2cGFzcENMalVHY2Y6",
        "Content-Type: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }?>
  </body>
</html>
