<?php
require_once 'services/functions.php';
$databases = query("SHOW DATABASES");
if (isset($_POST['backup'])) {
    if (isset($_POST['db_name'])) {
        backup($_POST['db_name']);
        $status = "<span style='font-weight: 600; color: green'>backup success.</span>";
    } else {
        $status = "<span style='font-weight: 600; color: red'>select database.</span>";
    }
}
?>

<title>Backup Database</title>
<h2>Pilih Database</h2>

<?php if (isset($status)) : ?>
    <div><?= $status; ?></div>
<?php endif; ?>

<form action="" method="POST">
    <?php foreach($databases as $db) : ?>
    <input type="checkbox" name="db_name[]" id="<?= $db['Database']; ?>" value="<?= $db['Database']; ?>">
    <label for="<?= $db['Database']; ?>"><?= $db['Database']; ?></label><br>
    <?php endforeach; ?>

    <div style="margin-top: 10px">
        <button type="button" onclick="selects()">Select All</button>
        <button type="button" onclick="deSelect()">Deselect All</button>
        <button type="submit" name="backup">Backup</button>
    </div>
</form>

<script src="services/scripts.js"></script>