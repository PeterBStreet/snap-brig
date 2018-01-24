<?php
/**
 * Created by PhpStorm.
 * User: petersdata
 * Date: 1/24/18
 * Time: 8:10 AM
 */


$crime = array("larsony"=>"Larsony", "embezzlement"=>"embezzlement", "praisingComcast"=>"praisingComcast", "tamperingWithReplicators"=>"tamperingWithReplicators", "vehicularManslaughter"=>"vehicularManslaughter");

$prisoners = array("brent"=>"brent", "miguel"=>"miguel", "nat"=>"nat");

echo $crime[array_rand($crime)];
echo $prisoners[array_rand($prisoners)];

/* Dylan's solution please complete

<?php
function throwInBrig() {
    $crimes = ["dividing by zero", "larceny", "embezzlement", "praising Comcast", "tampering with replicators", "vehicular manslaughter"];
    $prisoners = ["Brent", "Miguel", "Nat"];

    $conviction = $crimes[array_rand($crimes)];
    $perpetrator = $prisoners[random_int(0, count($prisoners) - 1)];

    echo "Mr. Worf, throw $perpetrator in the brig for $conviction!" . PHP_EOL;

    $solitaryCell = new \stdClass();
    $solitaryCell->conviction = $conviction;
    $solitaryCell->perpetrator = $perpetrator;
    return($solitaryCell);
}

$solitaryCell = throwInBrig();

var_dump($solitaryCell);

*/