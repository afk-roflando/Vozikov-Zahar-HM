<?php

require PARTS_DIR .'header.php';
extract(formSessionDate(SESSION_KEYS::REGISTER));
?>
    <section id="register" class="section-gap">
        <div class="container">
            <div class="row">
                <main class="w-25 m-auto mt-5 pt-5" >
                    <form action="/" method="POST">
                        <input type="hidden" name="type" value="register" />
                        <h1 class="h3 mb-3 fw-normal">Registration</h1>
                        <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name.."
                                   value="<?= $fields['name'] ?? '' ?>"
                                   autofocus>
                            <label for="name">Name</label>
                        </div>
                        <?= formError($errors['name'] ?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="surname" name="surname"
                                   value="<?= $fields['surname'] ?? '' ?>"
                                   placeholder="Your surname..">
                            <label for="surname">Surname</label>
                        </div>
                        <?= formError($errors['surname']?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="email" class="form-control" id="email" name="email"
                                   value="<?= $fields['email'] ?? '' ?>"
                                   placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <?= formError($errors['email']?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <?= formError($errors['password']?? null) ?>

                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation">
                            <label for="password_confirmation">Password Confirmation</label>
                        </div>
                        <?= formError($errors['password_confirmation']?? null) ?>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Create an account</button>
                    </form>
                </main>
            </div>
        </div>
    </section>

<?php require PARTS_DIR .'footer.php';
