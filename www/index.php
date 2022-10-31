<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPH LAMP stack</title>
        <link rel="stylesheet" href="/assets/css/bulma.min.css">
    </head>
    <body>
        <section class="hero is-medium is-info is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        PPH LAMP stack
                    </h1>
                    <h2 class="subtitle">
                        Cette stack a été forkée sur Github depuis celle de <a href="https://github.com/sprintcube/docker-compose-lamp/">Sprintcube</a>.<br/>
                        Toutes les modifications sont sur la branche <em>pphdev</em>. La branche Master reste identique à la version de Sprintcube.
                    </h2>
                </div>
            </div>
        </section>
        <section class="section is-info">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h3 class="title is-5">Environment</h3>
                        <div class="content">
                            <ul>
                                <li><?= apache_get_version(); ?></li>
                                <li>PHP <?= phpversion(); ?></li>
                                <li>
                                    <?php
                                    $link = mysqli_connect("database", "root", $_ENV['MYSQL_ROOT_PASSWORD'], null);

/* check connection */
                                    if (mysqli_connect_errno()) {
                                        printf("MySQL connecttion failed: %s", mysqli_connect_error());
                                    } else {
                                        /* print server version */
                                        printf("MySQL Server %s", mysqli_get_server_info($link));
                                    }
                                    /* close connection */
                                    mysqli_close($link);
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <h3 class="title is-5">Quick Links</h3>
                        <div class="content">
                            <ul>
                                <li><a href="/phpinfo.php">phpinfo()</a></li>
                                <li><a href="http://localhost:<? print $_ENV['PMA_PORT']; ?>">phpMyAdmin</a></li>
                                <li><a href="/test_db.php">Test DB Connection with mysqli</a></li>
                                <li><a href="/test_db_pdo.php">Test DB Connection with PDO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <h3 class="title is-5">PPH stuff</h3>
                    <div class="content">
                    <ul>
                        <li><a href="/pphwebdev/">index</a></li>
                    </ul>
                </div>
            </div>
        </section>

    </body>
</html>
