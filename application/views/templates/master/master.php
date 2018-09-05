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
        <!-- <link rel="stylesheet" href="css/all.min.css" type="text/css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
        <link rel="stylesheet" href="<?= base_url() ?>public/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" type="text/css">
    </head>


    <body>
        <div class="container-fluid main_container">
            <div class="row">
                <div class="col-md-2 p-0">
                    <aside class="sidebar-left-collapse">
                        <a href="#" class="company-logo">Logo</a>
                        <div class="sidebar-links">
                            <div class="link-blue selected">
                                <a href="#">
                                    <i class="fab fa-product-hunt"></i>Products
                                </a>
                                <ul class="sub-links">
                                    <li><a href="#">Portraits</a></li>
                                    <li><a href="#">Landscape</a></li>
                                    <li><a href="#">Studio shots</a></li>
                                    <li><a href="#">Macros</a></li>
                                </ul>
                            </div>
                            <div class="link-red">
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>Favorites
                                </a>
                                <ul class="sub-links">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 4</a></li>
                                </ul>
                            </div>
                            <div class="link-yellow">
                                <a href="#">
                                    <i class="fa fa-keyboard-o"></i>Projects
                                </a>
                                <ul class="sub-links">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 4</a></li>
                                </ul>
                            </div>
                            <div class="link-green">
                                <a href="#">
                                    <i class="fas fa-chart-line"></i>Report</a>
                                
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-10 main_content_area">
                    <nav class="navbar navbar-expand-md fixed-top menu-custom">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="site-buttons d-inline-block back-btn">
                            <button onclick="goBack()" class="btn green font-size"><i class="fa fa-arrow-alt-circle-left"></i> Go Back</button>
                        </div>

<!--                        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

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
                        </div>-->
                    </nav>

                    <div class="body-wrapper">

                        <?= $main_content ?>


                    </div>

                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url() ?>public/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>public/js/fontawesome.min.js"></script>

        <script src="<?= base_url() ?>public/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
        <script src="<?= base_url() ?>public/js/jquery-ui.min.js"></script>
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
        <script type="text/javascript">
            $(function () {
                var links = $('.sidebar-links > div');

                links.on('click', function () {
                    links.removeClass('selected');
                    $(this).addClass('selected');
                });
            });
        </script>    


        <script type="text/javascript">
            $(function () {
                var windowHeight = window.innerHeight;
                document.body.style.height = windowHeight + "px";

                window.addEventListener("resize", setWindowHeight, false);
                alert(windowHeight);
            });
        </script>


        <script>
            $(function () {
                $("#from_date").datepicker();
                $("#to_date").datepicker();
            });


        </script>
        <script type="text/javascript">
            $(document).ready(function () {
//              $('#customRadioInline1:checked').on(':checked', function () {
//                    var t = $(this).value;
//                    var advance_field = document.getElementById('advance_search_wrapper');    
//                if (t == 'advance_search'){
//                     advance_field.style.display = 'block'
//                } else{
//                    advance_field.style.display = 'none'
//                }
//            });
//          

                $('.adv_radio_search .search_radio_wrapper input').change(function () {
                    var advance_field = document.getElementById('advance_search_wrapper');
                    if ($('#customRadioInline1').is(':checked') == true) {
                        advance_field.style.display = 'flex'
                    } else {
                        advance_field.style.display = 'none'
                    }
                });
            });
        </script>


    </body>
</html>
