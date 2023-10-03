<?php 
$conn=mysqli_connect("localhost","root","","lijek");
$rezultat = mysqli_query($conn, "SELECT * FROM lijekovi WHERE id={$_GET['id']} LIMIT 1");


if($_GET['id']=null)
{
    echo "Ni jedan podatak nije unesen!";
}
else
{
echo "<table align = 'center' border='0' width='80%'>";
echo "<form action='azuriraja.php' method = 'POST'>";

    while($redak = mysqli_fetch_assoc($rezultat)){
        extract($redak, EXTR_PREFIX_ALL, "lijek");
 
    echo "<center><tr valign='top'>";
    echo "<td>&nbsp;</td>";
    echo "<td>Naziv</td>";
    echo "<td>Vrsta</td>";
    echo "<td>Proizvodac</td>";
    echo "<td>Doziranje</td>";
    echo "<td>Godine</td>";
    echo "<tr valign = 'top'>";
    echo "<td><input type='hidden' name='id' value='$lijek_id'></td>";
    echo "<td><input type='text' name='naziv' value='$lijek_Naziv'></td>";
    echo "<td><input type='text' name='vrsta' value='$lijek_Vrsta'></td>";
    echo "<td><input name='proizvodac' value='$lijek_Proizvodac'/></td>";
    echo "<td><input name='doziranje' value='$lijek_Doziranje'/></td>";
    echo "<td><input name='godine' value='$lijek_Godine'/></td>";

    echo "</tr>";
    echo "<tr valign='top'>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    echo "<td><input type='submit' name='submit' value='Azuriraj'>";
    echo "<form action='azuriraj.php' method='POST'>
            <input type='submit' name='submit' value='Odustani'>
            </form></td>";
    echo "</form>";
    echo "</tr>";
    echo "<tr valign='top'>";
    echo "<td>&nbsp;</td>";
    echo "<td>&nbsp;</td>";
    
    echo "</tr>";
    }
}

print "</table>";

?>
