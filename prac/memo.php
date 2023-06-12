<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="memoSave.php">
        <div style="text-align: center;">
            <table border=1>
                <tr>
                    <td>이름</td>
                    <td><input type="text" name="name" id="name"></td>
                <tr>
                    <td>이메일</td>
                    <td><input type="text" name="mail" id="mail"></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td><input type="text" name="content" id="content" style="width:400px;"></td>
                </tr>
            </table>
            <input type="submit" value="저장" style="margin-top: 10px;">
        </div>
    </form>

    <table border=1>
        <tr>
            <th>이름</th>
            <th>이메일</th>
            <th>내용</th>
            <th>시간</th>
        </tr>

        <?php
        $list = file("memo.txt");

        $sort = array_reverse($list); // 배열을 거꾸로 뒤집어줌
        
        $i = 0;
        foreach ($sort as $text) {
            if ($i > 4) {
                break;
            }
            $data = explode("///", $text); // "///"로 짤라서 배열로 넣어줌
            ?>
            <tr>
                <td>
                    <?= $data[0] ?>
                </td>
                <td>
                    <?= $data[1] ?>
                </td>
                <td>
                    <?= $data[2] ?>
                </td>
                <td>
                    <?= $data[3] ?>
                </td>
            </tr>
            <?
            $i++;
        } ?>
    </table>
</body>

</html>