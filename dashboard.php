<?php
session_start();
require 'koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

// Fetch group and country data for dropdowns
$groups = $pdo->query("SELECT * FROM groups")->fetchAll();
$countries = ["Germany", "Switzerland", "Scotland", "Hungary"]; // Example list

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $group_id = $_POST['group_id'];
    $country = $_POST['country'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];
    $points = ($wins * 3) + ($draws);

    $stmt = $pdo->prepare("INSERT INTO standings (group_id, country, wins, draws, losses, points) VALUES (:group_id, :country, :wins, :draws, :losses, :points)");
    $stmt->execute([
        'group_id' => $group_id,
        'country' => $country,
        'wins' => $wins,
        'draws' => $draws,
        'losses' => $losses,
        'points' => $points
    ]);

    echo "Data saved successfully!";
}
?>

<form method="POST" action="">
    Group: 
    <select name="group_id">
        <?php foreach ($groups as $group): ?>
            <option value="<?= $group['id'] ?>"><?= $group['name'] ?></option>
        <?php endforeach; ?>
    </select>
    
    Country: 
    <select name="country">
        <?php foreach ($countries as $country): ?>
            <option value="<?= $country ?>"><?= $country ?></option>
        <?php endforeach; ?>
    </select>
    
    Wins: <input type="number" name="wins" required>
    Draws: <input type="number" name="draws" required>
    Losses: <input type="number" name="losses" required>
    
    <button type="submit">Save</button>
</form>

<a href="logout.php">Logout</a>
