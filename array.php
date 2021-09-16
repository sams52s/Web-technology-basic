<?php
$student = array("sams", "sufian", "Tazul",); 
$Name="Tazul";
for($i=0;$i<=2;$i++)
{
    if($student[$i]==$Name)
{
    echo "$student[$i]";
}
else{
    echo "<br> Name not found <br>";
}

}

?>