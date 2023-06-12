<?
// phpinfo();
// Array
// (
//     [name] => 스크린샷 2023-06-06 오후 4.22.07.png
//     [full_path] => 스크린샷 2023-06-06 오후 4.22.07.png
//     [type] => image/png
//     [tmp_name] => /Applications/XAMPP/xamppfiles/temp/phpKE5EGo
//     [error] => 0
//     [size] => 9979
// )

$fn = date("YmdHis"); // 임의로 날짜로 파일명 변경

move_uploaded_file($_FILES["test"]['tmp_name'], "./data/" . $fn);

?>