<?php
    session_start();

    $ref = $_GET['reference']; 
    if ($ref == "") {
        header("Location:javascript://history.go(-1)");
    }
?>

<?php
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_live_feffc6458e7a9b30c2ec83b1c835e184cce5744d",
        "Cache-Control: no-cache",
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $response;
        $result = json_decode($response);
    }

    if ($result->data->status == 'success') {

        $userID = $_SESSION['user_id'];
        $status = $result->data->status;
        $subscription_plan = $result->data->metadata->custom_fields[0]->value;
        $transaction_ref = $result->data->reference;
        $amount = $result->data->amount / 100;
        $payment_method = $result->data->channel;
        $invoice_id = '#' . rand(1000, 9999);

        //Connect database
        include "./config/db.php";


        $check_user_query = "SELECT * FROM users WHERE user_id ='".$_SESSION['user_id']."'";
        $result = mysqli_query($conn, $check_user_query);
        if (mysqli_num_rows($result) > 0) {
            
  
            $query = "INSERT INTO subscription (userID, status, transaction_ref, amount, payment_method, invoice_id, subscription_plan)
                VALUES ('$userID', '$status', '$transaction_ref', '$amount', '$payment_method', '$invoice_id', '$subscription_plan')";
            
            mysqli_query($conn, $query);
            if (mysqli_affected_rows($conn) > 0) {

                $conn=mysqli_query($conn,"UPDATE users SET subscription_plan='$subscription_plan' WHERE user_id ='".$_SESSION['user_id']."'");
                
                $_SESSION['transactionRef'] = $transactionRef;
                echo "<meta http-equiv='refresh' content='0; URL=payment-success?status=success'>";
                
            } else {
                echo 'Error Occured'. mysqli_error($conn);
                exit;
            }

        }else {
            header("location: error");
            exit;
        }
    }
?>