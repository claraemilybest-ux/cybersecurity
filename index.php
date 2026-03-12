<?php
// show messages and form
require_once __DIR__ . '/db.php';
$db = get_db();
$stmt = $db->query("SELECT id, name, message, created_at FROM messages ORDER BY created_at DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Simple Guestbook</title></head>
<body>
<h1>Guestbook</h1>
<form method="post" action="submit.php">
  <label>Name: <input name="name" required></label><br>
  <label>Message:<br><textarea name="message" rows="4" cols="40" required></textarea></label><br>
  <button type="submit">Submit</button>
</form>

<h2>Messages</h2>
<?php foreach($messages as $m): ?>
  <div style="border:1px solid #ddd; padding:8px; margin-bottom:8px;">
    <strong><?=htmlspecialchars($m['name'])?></strong> <em><?=htmlspecialchars($m['created_at'])?></em>
    <p><?=nl2br(htmlspecialchars($m['message']))?></p>
  </div>
<?php endforeach; ?>
</body>
</html>
