<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" type="text/css">
        <!--        <link rel="stylesheet" href="css/all.min.css" type="text/css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >


        <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" type="text/css">


    </head>


    <body>

        <nav class="navbar navbar-expand-md fixed-top menu-custom">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>supplier">Supplier <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Latest Knowledge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BCS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Model Test</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bank</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Analytical Abilitiesu</a>
                            <a class="dropdown-item" href="#">Aptitude Test</a>
                            <a class="dropdown-item" href="#">Bangladesh Affairs</a>
                            <a class="dropdown-item" href="#">Daily Science</a>
                            <a class="dropdown-item" href="#">Economics</a>
                            <a class="dropdown-item" href="#">Banking and Finance</a>
                            <a class="dropdown-item" href="#">Latest Knowledge</a>
                            <a class="dropdown-item" href="#">Mathematics</a>
                            <a class="dropdown-item" href="#">English</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search-form-style">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">


                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <main role="main">

            <div class="body-wrapper">
                <div class="container">

                    <?= $main_content ?>

                </div>
            </div>
        </main>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url() ?>public/js/jquery.min.js"></script>
                <script src="<?= base_url() ?>public/js/fontawesome.min.js"></script>

        <script src="<?= base_url() ?>public/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

        <script src="<?= base_url() ?>public/js/validation.js"></script>
        <script src="<?= base_url() ?>public/js/scripts.js"></script>
        <script>
            function goBack() {
                window.history.back();
            }
            /*Search parametter*/
            function mySearch() {
                var input, filter, table, tr, td, i, tdCOunt;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[1];
                    td1 = tr[i].getElementsByTagName("td")[2];
                    td2 = tr[i].getElementsByTagName("td")[3];
                    if (td || td1 || td2) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = '';
                        } else {
                            tr[i].style.display = 'none';
                            document.getElementById("not_found_error").innerHTML = "Sorry!! Nothing Found...";

                        }
                    }

                }
            }

        </script>
         
    </body>
</html>
