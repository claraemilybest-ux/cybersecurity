<?php
require_once __DIR__ . '/db.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /'); exit;
}
$name = trim($_POST['name'] ?? '');
$message = trim($_POST['message'] ?? '');
if ($name === '' || $message === '') {
    header('Location: /?error=1'); exit;
}
$db = get_db();
$stmt = $db->prepare("INSERT INTO messages (name, message) VALUES (:name, :message)");
$stmt->execute([':name'=>$name, ':message'=>$message]);
header('Location: /');
exit;
?>