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




    $ingredientsHave = [];

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
    <form method="POST" action="" class = "flex">
    <div class="ingredients">
        
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
                if($row['have'] != 0) {
                    echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces} checked>";
                    array_push($ingredientsHave, $row['name']);
                }
                else 
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";

                array_push($ingredientsHave, $row['name']);
            }
        }
        else 
        {
            echo "No results found";
        }
        //$ingredientChosen = $_POST["ingredientName"];
        ?>
    </div>

    <div class="ingredients">

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
                if($row['have'] != 0) {
                    echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces} checked>";
                    array_push($ingredientsHave, $row['name']);
                }
                else 
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
    </div>

    <div class="ingredients">
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
                if($row['have'] != 0) {
                    echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces} checked>";
                    array_push($ingredientsHave, $row['name']);
                }
                else 
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
    </div>

    <div class="ingredients">
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
                if($row['have'] != 0) {
                    echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces} checked>";
                    array_push($ingredientsHave, $row['name']);
                }
                else 
                echo"<input type=\"checkbox\" class=\"checky\" id={$nameNoSpaces} name=\"ingredientName[]\" value={$nameNoSpaces}>";
                echo"<label for={$nameNoSpaces}>{$row['name']}</label>";
                echo"</div>";
            }
        }
        else 
        {
            echo "No results found";
        }
        ?>
    </div>
    <input type="submit" name="validate" value="Save ingredients/Search cocktails">
    </form>

    <div class="cocktails">
        
        <?php
        $sql = "SELECT * FROM cocktails ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                $ingredientsUnparsed = $row['ingredients'];
                $ingredientsArray = explode(';', $ingredientsUnparsed);

                $ingredientsInCommon = [];

                foreach($ingredientsArray as $ingredientInArray) 
                {
                    foreach($ingredientsHave as $ingredientHave) 
                    {
                        if($ingredientInArray == $ingredientHave) 
                        {
                            array_push($ingredientsInCommon, $ingredientInArray);
                            break;
                        }
                    }
                }

                if(count($ingredientsArray) == count($ingredientsInCommon)) 
                {
                    echo "<div class =\"onecocktail\">";
                    echo "<h2>{$row['name']}</h2>";
                    echo "<p>{$ingredientsUnparsed}</p>";
                    echo "</div>";
                }
            }
        }
        else 
        {
            echo "No results match";
        }
        ?>
    </div>
        <!--<script src="ingredients.js"></script>-->

    </div>


    </main>
    
</body>
</html>

<?php

if(isset($_POST['validate'])) 
{
    $chosenIngredients = $_POST['ingredientName'];
    $arrayLenght = count($chosenIngredients);

    foreach($chosenIngredients as $value) 
    {
        mysqli_query($conn, "UPDATE ingredients SET have='1' WHERE name='$value'");
    }
}

?>
