<?php
    require("common.php");
    ReadConfig("speedtest.cfg");
?>

<html>
    <head>
        <title>Simple speed test</title>
        <meta http-equiv="Expires" CONTENT="Fri, Jan 1 1980 00:00:00 GMT" />
        <meta http-equiv="Pragma" CONTENT="no-cache" />
        <meta http-equiv="Cache-Control" CONTENT="no-cache" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div id="speedtest_content">
            <h1>Speed Test</h1>

            <h2>
                <a class="start_test" title="Begin Speed Test" href="<?php echo $config->{'general'}->{'base_url'}; ?>/download.php">Start Test</a>
            </h2>

        </div>
    </body>
</html>

