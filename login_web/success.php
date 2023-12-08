<?php
session_start(); // 세션 시작

// 로그인되어 있지 않으면 로그인 페이지로 리다이렉션
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id']; // 세션에서 사용자 ID를 가져
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <h2>☁️GROOM☁️ </h2>
        
        <form class="login-form" action="login.php" method="GET">
          <p class="additional-content">
          <strong>이겨레 정보보호 3회차</strong> <br /><br />
          간단한 로그인 기능이 포함된 PHP 페이지 작성
          </p>
        </form>
        <h3> <?php echo $user_id; ?>님, 로그인에 성공했습니다.</h3>
        <a class="logout-link" href="home.php">로그아웃</a>
    </div>
</body>
</html>