<?php
    

    $otp=rand(1111,9999);
    

    $to="nlprasad50@gmail.com";
    $sub="OTP to confirm your account";
    $body="OTP is : $otp";
  
    

    if(mail("mansoorshaik0578@gmail.com","OTP to confirm your account","OTP is : $otp")) {
        echo "SENT";
    }
    else {
        echo "NOT SENT";
    }





?>