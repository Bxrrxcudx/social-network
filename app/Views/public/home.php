<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Bienvenue sur le panel Admin</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p>
                <label for="nom"></label>
                <input type="text" id="nom" name="nom">
            </p>
            <p>
                <label for="prenom"></label>
                <input type="text" id="prenom" name="prenom">
            </p>
            <p>
                <label for="mail"></label>
                <input type="email" id="mail" name="mail">
            </p>
            <p>
                <label for="password"></label>
                <input type="password" id="password" name="password">
            </p>
            <input type="submit" value="Go">
        </form>
    </main>
</body>
</html>