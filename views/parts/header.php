<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PS shop</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="<link rel="stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once PARTS_DIR . 'notification.php'?>
<section id="navigation" class="fixed-top" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="d-flex flex-wrap justify-content-center py-3">
                    <?php if($commonBlocks['navigation']['logo']): ?>
                         <a href="/"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                             <img width="110" src="img/logo%202.0.png" alt="logo">
                         </a>
                    <?php endif; ?>

                    <?php if($commonBlocks['navigation']['links']): ?>
                         <ul class="nav nav-pills">
                             <?php foreach ($commonBlocks['navigation']['links'] as $link): ?>
                             <li class="nav-item">
                                 <a href="<?= $link ['href'] ?>" class="nav-link"
                                    aria-current="page"><?= $link ['title'] ?></a>
                             </li>
                             <?php endforeach; ?>

                             <?php if (!isAuth()): ?>

                                <li class="nav-item">
                                    <a href="/login" class="nav-link" aria-current="page">Sign in</a>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link disabled">|</span>
                                </li>
                                <li class="nav-item">
                                    <a href="/register" class="nav-link" aria-current="page">Sign up</a>
                                </li>

                            <?php else: ?>
                                 <li class="nav-item">
                                     <span class="nav-link disabled">|</span>
                                 </li>
                                 <li class="nav-item dropdown">
                                     <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">User Actions</a>
                                     <ul class="dropdown-menu">
                                         <li><a class="dropdown-item" href="/account">Account</a></li>
                                         <?php if (isAdmin()): ?>
                                             <li><a href="/admin/dashboard" class="dropdown-item" >Admin panel</a></li>
                                         <?php endif; ?>
                                         <li><hr class="dropdown-divider"></li>
                                         <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                                     </ul>
                                 </li>
                             <?php endif;?>
                         </ul>
                    <?php endif; ?>
                </header>
            </div>
        </div>
    </div>
</section>
