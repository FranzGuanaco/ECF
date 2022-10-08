<?php

function ajouter($id, $nom, $descrip)

{

    if(require("connection.php"))

    {
        $req = $access -> prepare("INSERT INTO Client_data (id, name, description) values ($id, $nom, $descrip)");

        $req -> execute(array($id, $nom, $descrip));

        $req->closeCursor();
        }
}

function afficher()

{
    if(require("connection.php"))

    {
        $req = $access -> prepare("SELECT * FROM Client_data ORDER BY id");
        $req->exec();

        $data -> $req-> fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }
    }

  ?>

