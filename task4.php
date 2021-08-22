<!-- task 4 -->
<?php 
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');

$headers = array("Name", "Phone", "Email", "Address");
$data = array(
    'Shyam,9809098909,shyam@gmail.com,Kathmandu', 
    'Hari,9809098909,hari@gmail.com,Kathmandu'

        );



$fp = fopen('php://output', 'wb');
fputcsv($fp, $headers);
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);


?>
