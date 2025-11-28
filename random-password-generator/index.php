<!-- http://localhost:3000/random%20password%20generator/index.php -->
<?php
    function generate_password($length) {
        // characters to choose from
        $character = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

        $shuffled = str_shuffle($character);    //shuffles all characters of a str

        // cuts off based on the length the user picks
        return substr($shuffled, 0, $length);   //substr(string,start,length)
    }

    $password = "";
    $length = "";
    $error_msg = "";

    if(isset($_POST["generate"])){
        if(isset($_POST["length"]) && $_POST["length"] !== ""){
            if(is_numeric($_POST["length"])){
                $length = $_POST["length"];

                if($length < 4 || $length > 50){
                $error_msg = "Please enter a number between 4 and 50.";
                } else {
                    $password = generate_password($length);
                }
            } else {
                $error_msg = "Please enter a valid number.";
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h2>Random Password Generator</h2>
    <p>Create a strong, unguessable password forged from a mix of letters, numbers, and symbols in one click.</p>
    <form action="." method="post">
        <div class="results">
            <label>Password Generated: </label>
            <input type="text" name="password-output" readonly value="<?php echo $password ?>">
        </div>
        <button class="button" name="generate">
            <span class="button_lg">
                <span class="button_sl"></span>
                <span class="button_text">Generate</span>
            </span>
        </button>
        <div class="add-length">
            <label>Enter a Password length (4 to 50): </label>
            <input type="text" required name="length" value="<?php echo $length ?>">
        </div>
    </form>
    <?php if ($error_msg !== "" || $error_msg !== is_numeric($length)): ?>
        <p class="err"><?php echo $error_msg; ?></p>
    <?php endif; ?>
</body>
</html>