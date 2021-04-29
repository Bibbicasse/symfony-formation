<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ChanceController {
    public function getNumber() {
        $numberRandom = rand(0,100);
        return new Response(
            "<html>
                <body>
                    <h1>le numéro de la chance est $numberRandom</1h>
                </body>
            </html>"
        );/* fin de new response */
    }/* fin de function getNumber */
}/* fin de Class ChanceController */