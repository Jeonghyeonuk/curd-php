<?
include "lib.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width=800 border="1">
        <tr>
            <th width=50>No</th>
            <th>제목</th>
            <th width=100>작성자</th>
            <th width=100>작성일시</th>
        </tr>
        <?
        $query = "SELECT * FROM board order by idx desc";
        $result = mysqli_query($connect, $query);
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $data['idx'] ?></td>
                <td><a href="view.php?idx=<?= $data['idx'] ?>"><?= $data['subject'] ?></a></td>
                <td><?= $data['name'] ?></td>
                <td><?= substr($data['create_date'], 0, 10) ?></td>
            </tr>

        <? } ?>
    </table>

    <a href="write.php">글쓰기</a>
</body>

</html>