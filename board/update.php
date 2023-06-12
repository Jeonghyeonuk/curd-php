<?
include "lib.php";
$idx = $_GET['idx'];
$idx = mysqli_real_escape_string($connect, $idx);

$query = "SELECT * FROM board WHERE idx='$idx'";

$result = mysqli_query($connect, $query);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="updatePost.php?idx=<?= $idx ?>" method="post">
        <table width=800 border="1" cellpadding=5a>
            <? while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <th>이름</th>
                    <td><input type="text" name="name" id="name" value="<?= $data['name'] ?>"></td>
                </tr>
                <tr>
                    <th>제목</th>
                    <td><input type="text" name="subject" id="subject" value="<?= $data['subject'] ?>"></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td><textarea type="text" name="memo" id="memo" style="width: 100%; height:300px;"><?= $data['memo'] ?></textarea></td>
                </tr>
            <? } ?>
            <tr>
                <th>비밀번호</th>
                <td><input type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요" size=20></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="text-align:center;">
                        <input type="submit" value="저장">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>