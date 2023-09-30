<?php
if (!empty($_POST['contactSubmit'])) {
  // メール送信

  // リダイレクト
  $url = get_site_url();
  header("Location: ${url}");
  exit();
}
?>
