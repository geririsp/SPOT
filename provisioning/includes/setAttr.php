<?php

/**
 * Php script to set attributes like hostnames and IP in new sysprod DB
 */
require "share.php";
require "config.php";

if (isset($_POST['serial'])) {
    $serial = $_POST['serial'];



    $specifications = array('IP' => 'ipaddress', 'Hostname' => 'hostname', 'CPU' => 'cpu', 'RAM' => 'ram', 'OS' => 'os');
    $results = "";
    foreach ($specifications as $key => $specification) {
        if (isset($_POST[$specification])) {
            $current = $_POST[$specification];
            if ($key === "RAM") {
                $current = intval($current);
               
                $current = ceil($current * (1 / 1024));
                 echo "$key $current";
            }
            // we need to do two request as the api supports only a request at a time
            $url = URL_SYSPRODDB . '/AddSpecificationForOrderItem';
            $postfields = 'serial_number=' . $serial . '&specification=' . $key . '&specification_value=' . $current;
            $message = "<h5>Phase1 Try to add specification $key</h5>";
            $result = curlPost($url, $postfields);
            $results .= $message . jsonToHtml(json_decode($result, true));

            //Let's ack those values........

            $url = URL_SYSPRODDB . '/UpdateSpecificationForOrderItem';
            $postfields = 'serial_number=' . $serial . '&specification='.$key.'&specification_value=' . $current . '&acknowledge=1';
            $message = "<h5>Phase2: Try to ack $key</h5>";
            $result = curlPost($url, $postfields);
            $results .= $message . jsonToHtml(json_decode($result, true));
        }
    }

    if ($results === "") {
        $ERROR = 1;
        $results = "
            <table class='table'>
            <tr>
            <th>Message from Server</th>
            </tr>
            <tr>
            <td>No value has been posted, so no specifications have been set!</td>
            
             </tr>
            </table> ";
    }

    //If a serial number has not been posted, thrown an error
} else {
    $ERROR = 1;
        $results = "
            <table class='table'>
            <tr>
            <th>Message from Server</th>
            </tr>
            <tr>
            <td>No serial number has been posted, I cannot proceed further!!</td>
            
             </tr>
            </table> ";
}
echo $results;
?>
