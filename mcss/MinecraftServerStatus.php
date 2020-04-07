<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
</head>

<style>
/*    th {
        background-color: grey;
    }

    td {
        border: 1px solid grey;
    }
*/
    .
</style>

<body>
    <?php    
    require_once('minestat.php');

$ms = new MineStat("yourminecraftserverip.address", 25565);
echo '<table style=" /*background-color: gray;*/ width: 100%; text-align: center; height: 180px;">';
echo '<tr>';
echo '<th>';
printf("Server Status: ");
echo '<th>';

printf("%s<br>", $ms->get_address());
if($ms->is_online())
{
    echo '</tr>';
    echo '<tr>';
printf('<td>' . "Player: ");
printf('<td>' . " %s / %s online", $ms->get_current_players(), $ms->get_max_players());
//img template for 0-5 Player
if ($ms->get_current_players() == 0) {
    echo '<img style="float:right; margin-left: -65px;" width="65" src="mc0o5.png">';
}elseif ($ms->get_current_players() == 1) {
    echo '<img style="float:right; margin-left: -65px;" width="65" src="mc1o5.png">';
    }elseif ($ms->get_current_players() == 2) {
    echo '<img style="float:right; margin-left: -65px;" width="65px" src="mc2o5.png">';
    }elseif ($ms->get_current_players() == 3) {
    echo '<img style="float:right; margin-left: -65px;" width="65px" src="mc3o5.png">';
    }
echo '</tr>';
echo '<tr>';
  printf('<td>' ."Version: ");
  printf('<td>'. "%s", $ms->get_version());
  echo '</tr>';
  echo '<tr>';
  printf('<td>' ."Latency: ", $ms->get_latency());
  printf('<td>' ."%sms", $ms->get_latency());
  echo '</tr>';
  echo '<tr>';
  printf('<td>' ."MotD: ");
  printf('<td>' ."%s", $ms->get_motd());
  echo '</tr>';

}
else
{
    echo '</tr>';
    echo '<tr>';
    echo '<td>';

  echo '<p style="margin-left: 35%;"> Server</p>';
  echo '<td>';
  printf(" offline!");
  echo '<img style="float:right; margin-left: -65px;" width="65px" src="mcxo5.png">';
  echo '</tr>';
  echo '</table>';


}
    ?>


</body>

</html>
