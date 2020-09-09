<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Boilerplate | Change Title</title>

    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
</head>
<body>

    <main>

        <header>

            <h1>Main Title</h1>

            <ul class="main_nav">
                <li>
                    <a href="index.php" <?php if( $page_name == "home" ) {echo "class=\"selected\"" ;}  ?>>Home</a>
                </li>
                <li>
                    <a href="page_one.php" <?php if( $page_name == "page_one" ) {echo "class=\"selected\"" ;}  ?>>Page 1</a>
                </li>
                <li>
                    <a href="page_two.php" <?php if( $page_name == "page_two" ) {echo "class=\"selected\"" ;}  ?>>Page 2</a>
                </li>
                <li>
                    <a href="page_three.php" <?php if( $page_name == "page_three" ) {echo "class=\"selected\"" ;}  ?>>Page 3</a>
                </li>
            </ul>

        </header>

        <section>
            <article>