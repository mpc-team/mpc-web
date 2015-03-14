<?php switch ($dynamicsearch) {
                case "games": 
                    echo "connect to games table";
                    break;
                case "mpcid":
                    echo "connect to mpc id table";
                    break;
                case "emailaddr":
                    echo "connect to email address table";
                    break;
                case "clan-name-id":
                    echo "connect to clan table";
                    break;
                case default;
                    echo "connect to default table";

?>