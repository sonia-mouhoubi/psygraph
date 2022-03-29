<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <header>
        <h1>header</h1>

    </header>
    <main>
        <h1>Page Inscription</h1>
        <form action=""method="POST">
            <fieldset>
                <legend>Votre identité</legend>
                <div>
                    <label for="statu">patient ou entreprise</label>
                    <select id="pet-select">
                        <option value="">entreprise ou particulier</option>
                        <option value="entrepris">entreprise</option>
                        <option value="particulier">patient</option>
                        
</select>

                    
                    

                </div>
            <div>
                <label for="prenom">Votre prenom</label>
                <input type="text" name="prenom" id="prenom">

            </div>
            <div>
                <label for="non">Votre nom</label>
                <input type="text" name="non" id="nom">

            </div>
            <div>
                <label for="adresse">Votre adresse email </label>
                <input type="text"name="adresse"id="adresse">
                <div>
                    <label for="telephone">Votre telephone</label>
                    <input type="text"name="telephone"id="telephone">

                </div>
                <div>
                    <label for="">Votre code postal</label>
                    <input type="text" name="codepostal" id="codepostal">
                </div>
                <div>
                    <label for="pays">Votre pays</label>
                    <input type="text" name="pays" id="pays">
                </div>
                </fieldset>

            
            <div>
                

            </div>
            <fieldset>
                <legend>Vos identifiant de connexion</legend>

           
            <div>
                <label for="login">Votre login</label>
                <input type="text" name="login" id="login">

            </div>
            <div>
                <label for="login1">Confirmer votre login</label>
                <input type="text" name="login1" id="logi">

            </div>
            <div>
                <label for="password">votre password</label>
                <input type="password" name="password" id="password">

            </div>
            <div>
                <label for="password1">Confirmer votre password</label>
                <input type="password" name="password1" id="password1">

            </div>
             </fieldset>
             <input type="submit" value="inscrivez vous">






        </form>

    </main>
    <footer>
        <h1>footer</h1>

    </footer>
    
</body>
</html>