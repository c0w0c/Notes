<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nhp">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url(); ?>">ShrHe 筆記</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">About</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Front End <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/HTML5"><i class="sprite sprite-html5">　 HTML5</i></a></li>
                        <li><a href="Page/Tag/CSS3"><i class="sprite sprite-css3">　 CSS3</i></a></li>
                        <li><a href="Page/Tag/Javascript"><i class="sprite sprite-js">　 Javascript</i></a></li>
                        <li><a href="Page/Tag/Bootstrap"><i class="sprite sprite-bootstrap">　 Bootstrap</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Back End <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/PHP"><i class="sprite sprite-php">　 PHP</i></a></li>
                        <li><a href="Page/Tag/Codeigniter"><i class="sprite sprite-codeigniter">　 Codeigniter</i></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/Python"><i class="sprite sprite-python">　 Python</i></a></li>
                        <li><a href="Page/Tag/SublimeText"><i class="sprite sprite-sublimetext">　 SublimeText</i></a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" placeholder="搜尋文章..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
