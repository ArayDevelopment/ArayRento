<?php
global $conn;
include "../ArayRentoModel/ArayRentoConnectDB.php";

$sumAdvertisements = $conn->prepare("SELECT COUNT(id_rento_advertisements_aray) FROM aray_rento_advertisements_aray");