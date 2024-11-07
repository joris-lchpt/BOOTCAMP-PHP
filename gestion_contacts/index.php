<?php 
include 'model/class_contact.php';
include 'controller/data.php';
?>
<?php include 'view/header.php'; ?>
<body>
    <h2>Formulaire</h2>

    <form action="" method="post">
        <label for="nom">nom :</label>
        <input type="text" name="nom" id="">
        <br>
        <label for="email">email : </label>
        <input type="text" name="email" id="">
        <br>
        <label for="tel">tel : </label>
        <input type="text" name="tel" id="">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <br>
        <table>
            <tr>
                <th> nom </th>
                <th> email </th>
                <th> tel </th>
            </tr>
                <?php afficherContact($contact); ?>
        </table>
    <br><br>
</body>


<?php include 'view/footer.php'; ?>