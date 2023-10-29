<?php
if (isset($_GET['domain'])) {
    function liveExecuteCommand($cmd)
    {
        while (@ ob_end_flush()); // end all output buffers if any

        $proc = popen($cmd, 'r');

        $live_output     = "";
        $complete_output = "";

        while (!feof($proc))
        {
            $live_output     = fread($proc, 4096);
            $complete_output = $complete_output . $live_output;
            echo "<pre>$live_output</pre>";
            @ flush();
        }

        pclose($proc);
    }   
    $domain =  $_GET['domain'];
    $pingCmd = "ping ".$domain;
    liveExecuteCommand($pingCmd);
}
else{
    echo "No post request";
}
?>
