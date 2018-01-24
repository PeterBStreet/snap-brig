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

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>