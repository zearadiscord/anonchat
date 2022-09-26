<?php
$fp = fopen('data.txt', 'a');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  fputcsv($fp, [$_POST["message"],date("m月d日 H時i分s秒"),"\n"]);
  rewind($fp);
};
fclose($fp);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Anony Chat</title>
  <style>
    *{margin: 0;padding: 0;list-style: none}
    .wrap{
      width: 600px;
      margin: 0 auto;
      padding: 20px 0 100px 0;
      background: #f1f1f2;
      min-height: 100vh;
    }
    li{
      position: relative;
      padding: 10px 20px;
      margin: 0 10px 10px 10px;
      background-color: #fff;
      boeder-radius: 5px;
    }
    span{
      position: absolute;
      top: 50px;
      transform: translateY(-50px);
      right: 10px;
      font-size: 12px;
      color: #ccc;
    }
    form{
      position: fixed;
      top: 10px;
      left: 5vw;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <ul>
      
    </ul>
  </div>
  <form action="index.php" method="post">
    <input type="text" name="message">
    <button>Send</button>
  </form>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
  $(function() {
    $.ajax({
      url: "data.txt"
    })
    .done(function(data) {
      data.split("\n").forEach(function(chat) {
        const post_text = chat.split(",")[0];
        const post_time = chat.split(",")[1];
        if(post_text) {
          const = li = `<li>${post_text}<span>${post_time}</span></li>`;
          $("ul").append(li)
        }
      });
    });
  });
</script>
</body>
</html>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBjIe0FwN696PXpd5mWHsB7UCqyzVUHERI",
    authDomain: "zearadiscord-a603c.firebaseapp.com",
    projectId: "zearadiscord-a603c",
    storageBucket: "zearadiscord-a603c.appspot.com",
    messagingSenderId: "36207211438",
    appId: "1:36207211438:web:12d5d7c32c59fb73114e3f",
    measurementId: "G-S71KSYQYTP"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
