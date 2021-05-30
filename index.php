<?php
require_once 'includes/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails Site</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div class="container">
                <h1>Cocktails Site</h1>
        </div>
    </header>

    <main>
    <?php
    //Undefined variable $conn l26
    /*
    function DisplayIngredients($ingredientType) 
    {
        $sql = "SELECT * FROM ingredients WHERE type=$ingredientType ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $nameNoSpaces = str_replace(' ', '', $row['name']);
                echo "<div class=\"oneingredient\">";
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name={$nameNoSpaces} value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
    }
    */
    ?>
        <div class = "flex">
    <div class="ingredients">
        <form>
        <?php
        //DisplayIngredients('AlcoholStrong');
        $sql = "SELECT * FROM ingredients WHERE type='AlcoholStrong' ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $nameNoSpaces = str_replace(' ', '', $row['name']);
                echo "<div class=\"oneingredient\">";
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name={$nameNoSpaces} value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
        </form>
    </div>

    <div class="ingredients">
        <form>
        <?php
        $sql = "SELECT * FROM ingredients WHERE type='AlcoholLow' ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $nameNoSpaces = str_replace(' ', '', $row['name']);
                echo "<div class=\"oneingredient\">";
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name={$nameNoSpaces} value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
        </form>
    </div>

    <div class="ingredients">
        <form>
        <?php
        $sql = "SELECT * FROM ingredients WHERE type='Soft' ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $nameNoSpaces = str_replace(' ', '', $row['name']);
                echo "<div class=\"oneingredient\">";
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name={$nameNoSpaces} value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
        </form>
    </div>

    <div class="ingredients">
        <form>
        <?php
        $sql = "SELECT * FROM ingredients WHERE type='Other' ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $nameNoSpaces = str_replace(' ', '', $row['name']);
                echo "<div class=\"oneingredient\">";
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name={$nameNoSpaces} value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
        </form>
    </div>

    <div class="cocktails">
        <div class ="onecocktail">
            <h2>Vodka Orange</h2>
            <p>Vodka, Orange</p>
        </div>
        <div class ="onecocktail">
            <h2>Rhum Cola</h2>
            <p>Rhum, Cola</p>
        </div>
    </div>


    </div>


    </main>
    
</body>
</html>