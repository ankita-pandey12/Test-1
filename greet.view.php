<!DOCTYPE html>
<html>
<head>
    <title>Greeting App</title>
    <link rel="stylesheet" href="/pico.min.css">
</head>
<body>
    <main class="container">
    <div>
        <form method="post"> <!-- to take i/p post method is used -->
        <label for="name">Enter your Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="food">Choose your Favorite Food:</label>
        <br>
        <input type="radio" id="Noodles" name="food" value="Noodles" >
        <label for="Noodles">Noodles</label><br>

        <input type="radio" id="Chilli paneer" name="food" value="Chilli paneer" >
        <label for="Chilli paneer">Chilli Paneer</label><br>

        <input type="radio" id="pizza" name="food" value="pizza" required>
        <label for="pizza">Pizza</label><br><br>

        <button type="submit">Submit</button>
        </form>
        <?php echo "<h2>$greeting $name. Your favorite food is $food.</h2>"; ?>
    </div>
</body>
</html> 