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
        <div class = "flex">
    <div class="ingredients">
    <?php
        $sql = "SELECT * FROM ingredients WHERE type='AlcoholStrong' ORDER by name ASC";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if($rowCount > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) 
            {
                echo $row['name'] . "<br>";
            }
        }
        else 
        {
            echo "No results found";
        }
    ?>
        <form>
            <div class="oneingredient">
            <input type="checkbox" class="checky" id="whiskey" name="whiskey" value="Whiskey">
            <label for="whiskey">Whiskey</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="rhum" name="rhum" value="Rhum">
            <label for="rhum">Rhum</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="gin" name="gin" value="Gin">
            <label for="gin">Gin</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="vodka" name="vodka" value="Vodka">
            <label for="vodka">Vodka</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="tequila" name="tequila" value="Tequila">
            <label for="tequila">Tequila</label>
            </div><div></div>
            <div class="oneingredient">
                <input type="checkbox" id="whiskey" name="whiskey" value="Absinth">
                <label for="whiskey">Absinth</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="rhum" name="rhum" value="Beer">
                <label for="rhum">Beer</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="gin" name="gin" value="Wine">
                <label for="gin">Wine</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="vodka" name="vodka" value="Cider">
                <label for="vodka">Cider</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="tequila" name="tequila" value="Sake">
                <label for="tequila">Sake</label>
                </div><div></div>
        </form>
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
                echo $row['name'] . "<br>";
            }
        }
        else 
        {
            echo "No results found";
        }
    ?>
        <form>
            <div class="oneingredient">
            <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
            <label for="whiskey">Orange juice</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="rhum" name="rhum" value="Rhum">
            <label for="rhum">Soda</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="gin" name="gin" value="Gin">
            <label for="gin">Lemonade</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="vodka" name="vodka" value="Vodka">
            <label for="vodka">Apple juice</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="tequila" name="tequila" value="Tequila">
            <label for="tequila">Pineapple juice</label>
            </div><div></div>
            <div class="oneingredient">
                <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
                <label for="whiskey">Grape juice</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="rhum" name="rhum" value="Rhum">
                <label for="rhum">Tomato juice</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="gin" name="gin" value="Gin">
                <label for="gin">Cranberry juice</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="vodka" name="vodka" value="Vodka">
                <label for="vodka">Cola</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="tequila" name="tequila" value="Tequila">
                <label for="tequila">Root beer</label>
                </div><div></div>
        </form>
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
                echo $row['name'] . "<br>";
            }
        }
        else 
        {
            echo "No results found";
        }
    ?>
        <form>
            <div class="oneingredient">
            <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
            <label for="whiskey">Sugar</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="rhum" name="rhum" value="Rhum">
            <label for="rhum">Salt</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="gin" name="gin" value="Gin">
            <label for="gin">Pepper</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="vodka" name="vodka" value="Vodka">
            <label for="vodka">Sugar cane</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="tequila" name="tequila" value="Tequila">
            <label for="tequila">Vanilla</label>
            </div><div></div>
            <div class="oneingredient">
                <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
                <label for="whiskey">Tobasco</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="rhum" name="rhum" value="Rhum">
                <label for="rhum">Milk</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="gin" name="gin" value="Gin">
                <label for="gin">Lemon</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="vodka" name="vodka" value="Vodka">
                <label for="vodka">Lime</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="tequila" name="tequila" value="Tequila">
                <label for="tequila">Coffee</label>
                </div><div></div>
        </form>
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
                echo $row['name'] . "<br>";
            }
        }
        else 
        {
            echo "No results found";
        }
    ?>
        <form>
            <div class="oneingredient">
            <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
            <label for="whiskey">Amaretto</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="rhum" name="rhum" value="Rhum">
            <label for="rhum">Kahlua</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="gin" name="gin" value="Gin">
            <label for="gin">Porto</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="vodka" name="vodka" value="Vodka">
            <label for="vodka">Curaçao</label>
            </div>
            <div class="oneingredient">
            <input type="checkbox" id="tequila" name="tequila" value="Tequila">
            <label for="tequila">Tequila</label>
            </div><div></div>
            <div class="oneingredient">
                <input type="checkbox" id="whiskey" name="whiskey" value="Whiskey">
                <label for="whiskey">Pastis</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="rhum" name="rhum" value="Rhum">
                <label for="rhum">Picon</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="gin" name="gin" value="Gin">
                <label for="gin">Ouzo</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="vodka" name="vodka" value="Vodka">
                <label for="vodka">Jagermeister</label>
                </div>
                <div class="oneingredient">
                <input type="checkbox" id="tequila" name="tequila" value="Tequila">
                <label for="tequila">Umeshu</label>
                </div><div></div>
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