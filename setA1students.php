<?php
    $fp=fopen("marks.dat",r);
    echo"<table border=1>";
    echo"<tr><th>Rno</th><th>Name</th><th>Class</th><th>M1</th><th>M2</th><th>M3</th><th>total</th><th>Percentage</th></tr>";

    while($row=fscanf($fp,"%s %s %s %s %s %s %s %s"))
    {
        echo"<tr>";
        foreach($row as $r)
        {
            echo"<td>$r</td>";
        }
        echo"</tr>";
    }
    echo"</table>";
    fclose($fp);
?>