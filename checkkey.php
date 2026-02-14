<?php
header('Content-Type: text/plain');

// lấy key từ tool
$key = isset($_GET['check_key']) ? $_GET['check_key'] : "";

// đọc file keys.txt
$keys = file_exists("keys.txt") ? file("keys.txt", FILE_IGNORE_NEW_LINES) : [];

if(in_array($key, $keys)){
    echo "AUTH_SUCCESS|sampAddChatMessage('{00ffd5}[KN SYSTEM]: {ffffff}Code Lua chạy thành công!', -1)";
} else {
    echo "AUTH_ERR|Key khong hop le";
}
?>
