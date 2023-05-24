<?php

$nome = "Matheus";
$sobrenome = "Battisti";

?>

<form action="">
    <div>
        <label>
            <input type="text" value="<?= $nome; ?>">
        </label>
    </div>
    <div>
        <label>
            <input type="text" value="<?= $sobrenome; ?>">
        </label>
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>