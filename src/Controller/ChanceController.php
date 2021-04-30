<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChanceController {
    //La route vers ce contrôleur est définie config/route.yaml
    public function getNumber() {
        $numberRandom = rand(0,100);
        return new Response(
            "<html>
                <body>
                    <h1>le numéro de la chance est $numberRandom</h1>
                </body>
            </html>"
        );/* fin de new response */
    }/* fin de function getNumber */

    /**
     * @Route(path="/chance/analyse/", name="chance_analyse")
     */
    public function analyseRequete(Request $requete) {
        dump($requete);
      
        return new Response(
        "<html>
            <body>
                <p>Contenu de la requête dans le dump</p>
                <form method='POST' action='/requete-post'>
                    <input type='text' value='Salvatore' name='prenom'>
                    <input type='submit'
                </form> 
            </body>
        </html>");
    }/* fin de function analyseRequete */
}/* fin de Class ChanceController */