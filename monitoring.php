<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles/styles.css">
    <?php include('Scripts/LoginSession.php')?>
    <title>Monitoring</title>
</head>
<body>
    <h2>Monitoring</h2>
    <?php
        // Your raw PowerShell output
        $rawOutput = shell_exec('powershell.exe -File Scripts/GetVMData.ps1');

        // Extract VM data from the raw output
        $pattern = '/\{.*?\}/s'; // Regular expression to match JSON objects
        preg_match_all($pattern, $rawOutput, $matches);

        // Check if matches were found
        if (!empty($matches[0])) {
            // Decode each JSON object and store in an array
            $vmData = array_map(function ($json) {
                return json_decode($json, true);
            }, $matches[0]);

            // Print the table header
            echo '<table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Power State</th>
                        <th>Provisioned CPU Cores</th>
                        <th>CPU Usage</th>
                        <th>Provisioned Memory</th>
                        <th>Memory Usage</th>
                        <th>Provisioned Storage Space</th>
                        <th>Storage Space Used</th>

                    </tr>';

            // Print each row of the table
            foreach ($vmData as $vm) {
                echo '<tr>';
                echo '<td>' . $vm['Name'] . '</td>';
                echo '<td>' . $vm['PowerState'] . '</td>';
                echo '<td>' . $vm['NumCpu'] . '</td>';
                echo '<td>' . $vm['CpuUsageMHz'] . '</td>';
                echo '<td>' . $vm['MemoryGB'] . ' GB' . '</td>';
                echo '<td>' . $vm['MemoryUsageMB'] . ' MB' . '</td>';
                echo '<td>' . $vm['ProvisionedSpaceGB'] . ' GB' . '</td>';
                echo '<td>' . $vm['UsedSpaceMB'] . ' MB' . '</td>';

                echo '</tr>';
            }

            // Close the table
            echo '</table>';
        } else {
            echo 'No VM data found.';
        }
    ?>
</body>
</html>    