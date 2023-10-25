<div class="container">
    <h2 class="mb-4">保存的密码</h2>
    <ul class="list-group">
        <?php
        session_start();
        $userId = $_SESSION['user_id'];
        $sql = "SELECT title, password, timestamp FROM password_storage WHERE user_id = ? ORDER BY timestamp DESC";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('i', $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            echo "<li class='list-group-item'>";
            echo "标题: " . $row['title'] . " | 密码: " . $row['password'] . " | 保存时间: " . $row['timestamp'];
            echo "</li>";
        }
        $stmt->close();
        ?>
    </ul>
</div>
