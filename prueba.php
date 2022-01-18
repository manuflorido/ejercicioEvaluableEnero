<html>
<body>
    <form id="formulario_calculadora" method="post" target="_blank">
        <fieldset>
        <legend>Calculadora</legend><br>

            <label>Número → </label><input type="text" name="num1" placeholder="0" required/>
            <br><br>

            <label><input class="clase" type="submit" name="resolver" value="Resolver" id="resolv"/></label>
            <label><input class="clase" type="reset" name="reset"  value="Reset" id="reset"/></label>
            


        </fieldset><br>
    </form>
    <?php
include 'arrayDB.php';
    $id=$_POST["num1"];
/*$avionPasajero = array(
    array('Vuelo' => "Vueling-AE12","Pasajeros" => "1" ),
    array('Vuelo' => "Volotea-EA21","Pasajeros" => "2" ),
    array('Vuelo' => "Iberia-WE44","Pasajeros" => "3" ),
    array('Vuelo' => "Vueling-AE12","Pasajeros" => "8" )
);
*/

echo "<br>";
$numero=0;
foreach ($vueloPasajeros as $pasajero) {
    $vuelesito=$pasajero["Vuelo"];
    $pasajerito=$pasajero["Pasajeros"];
    
    if ($vuelesito==$id) {
        $numero=$numero+$pasajerito;

    }

    echo "<br>";
}
echo $numero;
?>
</body>
</html>

