<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>
<style>
    h1 {
        text-align: center;
    }

    table {
        margin-top: 30px;
        margin-left: 30%;
    }
</style>

<body>
    <?php
    function get_server_memory_usage()
    {

        $free = shell_exec('free');
        $free = (string) trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2] / $mem[1] * 100;

        echo '<td>' . "RAM: \t" . $memory_usage . "%" . '</td>';
    }
    function get_server_load_usage()
    {

        $load = sys_getloadavg();
        echo '<td>' . "Load: \t" .  $load[0] . "%" . '</td>';
    }
    function get_server_disk_usage()
    {
        $df = round(disk_free_space("/") / 1024 / 1024 / 1024);
        echo '<td>' . "ADisk: \t" . $df . "GB" . '</td>';
        //ADisk=Avaiable Disk
    }

    function get_total_disk_space()
    {
        $df = round(disk_total_space("/") / 1024 / 1024 / 1024);
        echo '<td>' . "TDisk: \t" . $df . "GB" . '</td>';
        //TDisk=Total Disk

    }

    echo '<table>';
    echo '<tr>';
    echo '<th>Resources</th>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>';
    echo '</tr>';
    echo '<tr>';
    get_server_load_usage();
    echo '</tr>';
    echo '<tr>';
    get_server_memory_usage();
    echo '</tr>';
    echo '<tr>';
    get_total_disk_space();
    echo '</tr>';
    echo '<tr>';
    get_server_disk_usage();
    echo '</tr>';
    echo '</table>';
    ?>
</body>

</html>