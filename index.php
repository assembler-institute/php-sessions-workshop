<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[PHP - Sessions] - Workshop</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/cheatsheet.css">
</head>

<body class="bg-light">

    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                <img src="./assets/img/assembler_icon.jfif" width="40" height="40" class="me-3" alt="Assembler School">
                [PHP - Sessions] - Workshop
            </h1>
        </div>
    </header>
    <aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
        <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this page</h2>
        <nav class="small" id="toc">
            <ul class="list-unstyled">
                <li class="my-2">
                    <button class="btn d-inline-flex align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>
                    <ul class="list-unstyled ps-3 collapse show" id="contents-collapse">
                        <li><a class="d-inline-flex align-items-center rounded" href="#introduction">Introduction</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#create">Create</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#read">Read</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#modify">Modify</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#destroy">Destroy</a></li>
                        <li><a class="d-inline-flex align-items-center rounded" href="#demo">Login Demo</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <div class="bd-cheatsheet container-fluid bg-body">
        <section id="content">
            <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Contents</h2>

            <article class="my-3" id="introduction">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Introduction</h3>
                    <a class="d-flex align-items-center" href="https://www.php.net/manual/es/book.session.php">Documentation</a>
                </div>

                <div>
                    <?php require_once("./workshop/1-introduction.php"); ?>
                </div>
            </article>
            <article class="my-3" id="create">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Create</h3>
                    <a class="d-flex align-items-center" href="https://www.php.net/manual/es/session.examples.basic.php">Documentation</a>
                </div>

                <div>
                    <?php require_once("./workshop/2-create.php"); ?>
                </div>
            </article>
            <article class="my-3" id="read">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Read</h3>
                    <a class="d-flex align-items-center" href="https://www.php.net/manual/es/session.examples.basic.php">Documentation</a>
                </div>

                <div>
                    <?php require_once("./workshop/3-read.php"); ?>
                </div>
            </article>
            <article class="my-3" id="modify">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Modify</h3>
                    <a class="d-flex align-items-center" href="https://www.php.net/manual/es/session.examples.basic.php">Documentation</a>
                </div>

                <div>
                    <?php require_once("./workshop/4-modify.php"); ?>
                </div>
            </article>
            <article class="my-3" id="destroy">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Destroy</h3>
                    <a class="d-flex align-items-center" href="https://www.php.net/manual/es/session.examples.basic.php">Documentation</a>
                </div>

                <div>
                    <?php require_once("./workshop/5-destroy.php"); ?>
                </div>
            </article>
            <article class="my-3" id="demo">
                <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                    <h3>Live Demo</h3>
                    <a class="d-flex align-items-center" href="https://github.com/assembler-school/php-sessions-workshop">Repository</a>
                </div>

                <div>
                    <?php require_once("./workshop/6-demo.php"); ?>
                </div>
            </article>
        </section>
    </div>

    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/cheatsheet.js"></script>
</body>

</html>