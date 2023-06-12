<?
include "lib.php";

$idx = $_GET['idx'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="del.php" method="post">
        <table width=800 border="1" cellpadding=5a>
            <tr>
                <td colspan="2"><?= $idx ?>번 게시물을 정말 삭제 할까요 ?</td>
            </tr>
            <input type="hidden" name="idx" value="<?= $idx ?>">
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