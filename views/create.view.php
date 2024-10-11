<?php
$pageTitle = "Add new film";
require("./views/partials/header.php");
?>
<h1>Add a new film</h1>

<form method="POST" action="./index.php?action=store">
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="year">Year:</label>
        <input type="text" id="year" name="year">
    </div>
    <div>
        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration">
    </div>
    <div>
        <button type="submit">SAVE THE FILM</button>
    </div>

</form>

<?php
require("./views/partials/footer.php");
?>