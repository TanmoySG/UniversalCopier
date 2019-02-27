<?php
include 'connection.php';
error_reporting(error_reporting() & ~E_NOTICE);
$rows = array();
$query = $pdo->prepare("SELECT * FROM links");
$query->execute();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
}
foreach ($rows as $row) {
    ?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="link-box">
            <span style="font-family: 'Open Sans'"><?php echo $row['description']; ?></span>
            <p style="font-family: 'Open Sans'; font-size: 1rem;"><?php echo $row['link']; ?></p>
            <a href="https://<?php echo $row['link']; ?>" style="font-family: 'Open Sans'; color: #1e78ff;" target="_blank">Go to link <i class="fas fa-external-link-alt"></i></a>
        </div>
    </div>
<?php } ?> 


    