<?
include "lib.php";
$idx = $_GET['idx'];
$idx = mysqli_real_escape_string($connect, $idx);

$query = "SELECT * FROM board WHERE idx='$idx'";
$result = mysqli_query($connect, $query);
$data = mysqli_fetch_array($result);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="writePost.php" method="post">
        <table width=800 border="1" cellpadding=5a>
            <tr>
                <th>이름</th>
                <td><?= $data['name'] ?></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><?= $data['subject'] ?></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><?= nl2br($data['memo']) ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="list.php">목록</a>
                    <div style="float:right;">
                        <a href="confirmDel.php?idx=<?= $idx ?>"> 삭제</a>
                        <a href="update.php?idx=<?= $idx ?>">수정</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>

    <script>

    </script>
</body>

</html>