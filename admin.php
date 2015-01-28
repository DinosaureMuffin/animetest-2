<meta charset="UTF-8">
<?php
if( count($_POST) > 0 ){
 $db = new mysqli( 'localhost' , 'root' , '' , 'cours' );
 if( $db->connect_errno ){
        die( 'Erreur de connexion' );
    }
 $sql ="INSERT INTO `page`(`body`, `css`, `title`, `page`, `menu_title`) 
        VALUES ('".$_POST['body']."' ,
                '".$_POST['css']."' ,
                '".$_POST['title']."' ,
                '".$_POST['page']."' ,
                '".$_POST['menu_title']."')";

        if( !$db->query( $sql )){
            echo "ERROR";
        } else {
        echo "Féliciation vous avez inserez une nouvelle page";

          }
      }
 ?>

     <form action="admin.php" method="post">
        <tr>
            <td><input type="text" name="title" placeholder="Titre" /></td></br>
            <td><input type="text" name="page" placeholder="Nom de la Page" /></td></br>
            <td><input type="text" name="menu_title" placeholder="Titre dans le menu" /></td></br>
            <td><input type="text" name="css" placeholder="style.css" /></td></br>
            <td><textarea type="text" name="body" placeholder="Contenu"></textarea></td></br>
            <td><input type="submit" /></td>
        </tr>
    </form>
