<?php
    /**
     *  Plugin name: Formulaire de Contact  Plugin
     * Author : Jeremi KOLOMA
     */

     function exempleFormulairePlugin(){

        $content ='';
        $content ='<body>

        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

       

            <div class="col-md-6 offset-md-3">

                <h2>Contactez Nous !</h2>

                <form method="post" action="http://localhost/siteodc/message-envoye/">

                    <div class="mb-3 form-row form-floating">
                        <input type="email" name="your_email" id="your_email" placeholder="Votre mail" class="form-control mb-3" required/>
                        <label for="email">Email </label>
                    </div>

                    <div class="mb-3 form-row form-floating">
                        <input type="text" name="your_objet" id="your_objet" placeholder="Objet" class="form-control mb-3" required />
                        <label for="objet">Objet </label>
                    </div>

                    <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                        <textarea class="form-control mb-3"  name="message" id="exampleFormControlTextarea1" rows="3" required>
                        </textarea>
            
                    <input type="submit" name="exempleFormSubmit" value="Envoyer" class="btn btn-md mb-4" />

                </form>
            </div>

    </body>';

        return $content;
     }

     add_shortcode('exempleFormulaire','exempleFormulairePlugin');


     /**
      * recupération des informations;
      */

      function exempleFormCapture(){
        if(isset($_POST['exempleFormSubmit'])){
            $email = sanitize_text_field($_POST['your_email']);
            $objet = sanitize_text_field($_POST['your_objet']);
            $comments = sanitize_textarea_field($_POST['message']);

            $to = 'kolomajeremi60@gmail.com';
            $subject = 'Test Form submission';
            $message = ''.$email.' - '.$objet.' - '.$comments;

            wp_mail($to,$subject,$message);
        }
      }


      add_action('wp_head', 'exempleFormCapture');



?>