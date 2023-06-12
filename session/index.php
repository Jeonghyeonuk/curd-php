<?

include "lib.php";

$isLogin = $_SESSION['isLogin'];

if (!$isLogin) {

?>

    로그인후 이용해 주세요 . <br>
    <a href="login.php">로그인 페이지로 이동</a>


<? } ?>