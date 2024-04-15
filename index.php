<?php
// 모바일 사용자인지 여부를 확인
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isMobile = preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $userAgent);

// 모바일 사용자면 모바일용 페이지로 리디렉션
if ($isMobile) {
    header('Location: mobile.html');
    exit;
} else { // 모바일 사용자가 아니면 PC용 페이지로 리디렉션
    header('Location: desktop.html');
    exit;
}
?>