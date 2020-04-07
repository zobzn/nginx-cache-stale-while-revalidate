<?php // sleep(2)?>
<?php usleep(5 * 1000 * 1000) ?>
<!DOCTYPE html>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="/webpack/test-1.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<?= (new DateTimeImmutable())->setTimezone(new DateTimeZone('Europe/Kiev'))->format('Y-m-d H:i:s') . ' ' . $_SERVER['REQUEST_URI'] . PHP_EOL ?>