<?
include("connect.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insertProc.php">
        이름 : <input type="text" name="name" id="name"> <br>
        메모 : <input type="text" name="content" id="content"> <br>
        <input type="submit" value="저장">
    </form>

    <?
    $query = "SELECT * FROM memo order by no desc";

    $result = mysqli_query($connect, $query);


    ?>

    <table border="1">
        <tr>
            <td>idx</td>
            <td>이름</td>
            <td>메모</td>
            <td>등록일</td>
        </tr>
        <?
        while ($data = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td>
                    <?= $data['no'] ?>
                </td>
                <td>
                    <?= $data['name'] ?>
                </td>
                <td>
                    <?= $data['content'] ?>
                </td>
                <td>
                    <?= $data['create_date'] ?>
                </td>
                <td>
                    <a href="del.php?no=<?= $data['no'] ?>" onclick="return confirm('삭제?')">삭제</a>
                </td>
                <td>
                    <a href="#" onclick="update(<?= $data['no'] ?>)">수정</a>
                </td>
            </tr>
        <? } ?>
    </table>

    <script>
        const update = (no) => {
            const a = prompt('수정할 내용을 입력 하세요');

            location.href = `update.php?no=${no}&content=${a}`;

        }
    </script>
</body>

</html>