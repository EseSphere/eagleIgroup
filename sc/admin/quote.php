<?php
require_once 'header.php';
if (isset($_GET['delete'])) {
    $userId = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);
    if ($userId) {
        $stmt = $conn->prepare("DELETE FROM quote WHERE userId = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->close();

        header("Location: index.php");
        exit();
    } else {
        echo "Invalid user ID.";
    }
}
?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    form {
        margin-bottom: 20px;
    }
</style>

<div id="session-container">
    <h3>Quotes</h3>
</div>

<div class="row text-decoration-none bg-white mt-3 mb-3">
    <table>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Services</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM quote ORDER BY `dateTime` DESC");
        $sn = 1;
        while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $sn++ ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['services']) ?></td>
                <td><?= htmlspecialchars($row['message']) ?></td>
                <td>
                    <a class="btn btn-danger btn-sm" href="?delete=<?= urlencode($row['userId']) ?>" onclick="return confirm('Are you sure you want to delete this quote?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php require_once 'footer.php'; ?>