<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/sub-layout.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script> 
  <script src="https://kit.fontawesome.com/40d55bb55c.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <header>
  <nav class="member">
    <div class="center">
      <a href="#">로그인</a>
      <a href="#">회원가입</a>
      <a href="#">SNS</a>
    </div>
  </nav>
  <div class="bottom">
    <h1>
      <a href="./index.php">
        <img src="./img/icons/logo.png" alt="">
      </a>
    </h1>
    <script src="./js/gnb.js"></script>
    <nav class="gnb">
      <?php include'menu.php'?>
    </nav>
  </div>
  </header>
