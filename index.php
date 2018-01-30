
<html>
   <head>
      <title>Server Controls</title>
   </head>
   <body>
      <table>
      <thead>
         <tr>
            <th>Reboot</th>
            <th>Shutdown</th>
         </tr>
      </thead>
      <tbody>
      <?php
         $xml = simplexml_load_file('servers.xml');
         foreach($xml as $server){
            echo "<tr>";
            //echo '<form action=http://' . $server->ip . '/reboot.php/" method="post">';
            //echo '<input type="submit" value="Reboot '. $server->ip . '">';
            //echo '</form>';
            echo "<td>"; 
	    echo "<a href='http://$server->ip/reboot.php'>$server->ip</a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='http://$server->ip/shutdown.php'>$server->ip</a>";
            echo "</td>";
            echo "</tr>";
         }
      ?>
      </tbody>
      </table>
   </body>
</html>
