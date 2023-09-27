<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="<link rel="stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/main.css">
</head>
<body>
<?php include_once PARTS_DIR . 'notification.php'?>
<header id="navigation" >
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
            <?php if(!empty($mainFields['navigation']['logo'])): ?>
            <div class="col" id="logo">
                <a href="/">
                    <img src="<?= IMAGES_URI . $mainFields['navigation']['logo'] ?>">
                </a>
            </div>
            <?php endif; ?>
            <div class="col d-flex justify-content-end">
                <nav class="nav">
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/pruducts">All Products</a></li>
                            <li><a class="dropdown-item" href="/admin/pruducts/create">Create Products</a></li>
                        </ul>
                    </div>
                    <a href="/admin/content" class="nav-item">Content</a>
                    <a href="#" class="nav-link disabled">|</a>
                    <a href="/logout" class="nav-link">Back to Site</a>
                    <a href="/logout" class="nav-link">Log Out</a>
                    <a></a>
                </nav>
            </div>
        </div>
    </div>
</header>
