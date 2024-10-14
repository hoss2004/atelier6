<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>adresse</th>
            <th>tel</th>
        </tr>
        <tr>
            <td>
                <?php
                echo $user1->getNom();
                 ?>
            </td>
            <td>
                <?php
                echo $user1->getPrenom();
                 ?>
            </td>
            <td>
                <?php
                echo $user1->getEmail();
                 ?>
            </td>
            <td>
                <?php
                echo $user1->getAdresse();
                 ?>
            </td>
            <td>
                <?php
                echo $user1->getTel();
                 ?>
            </td>
        </tr>
    </table>

</body>

</html>