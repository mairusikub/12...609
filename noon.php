<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>การตัดเกรด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">ระบบตัดเกรด</h2>

        <form method="post" action="">
            <div class="mb-3">
                <label for="score" class="form-label">กรุณากรอกคะแนน:</label>
                <input type="number" name="score" id="score" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">ตรวจสอบเกรด</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = $_POST['score'];
            
            echo "<div class='mt-4 alert alert-info'>";
            if ($score > 80) {
                echo "คุณได้เกรด A";
            } elseif ($score > 70) {
                echo "คุณได้เกรด B";
            } elseif ($score > 60) {
                echo "คุณได้เกรด C";
            } elseif ($score > 50) {
                echo "คุณได้เกรด D";
            } elseif ($score <= 49) {
                echo "คุณได้เกรด F";
            } else {
                echo "กรุณากรอกคะแนนให้ถูกต้อง";
            }
            if ($score < 0 || $score > 100) {
    echo "คะแนนต้องอยู่ระหว่าง 0 ถึง 100";
}
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>