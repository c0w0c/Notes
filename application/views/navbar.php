<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                    <form class="navbar-form2" method="POST" action="Page/Search">
                        <div class="form-group">
                            <input type="text" name="Search_str" placeholder="搜尋文章..." maxlength="12" required="required" class="form-control">
                        </div>
                        <button type="submit" class="btn2 btn-success"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Front End <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/HTML5"><i class="sprite sprite-html5">　 HTML5</i><span class="badge">0</span></a></li>
                        <li><a href="Page/Tag/CSS3"><i class="sprite sprite-css3">　 CSS3</i><span class="badge">1</span></a></li>
                        <li><a href="Page/Tag/Javascript"><i class="sprite sprite-js">　 Javascript</i><span class="badge">0</span></a></li>
                        <li><a href="Page/Tag/Bootstrap"><i class="sprite sprite-bootstrap">　 Bootstrap</i><span class="badge">0</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Back End <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/PHP"><i class="sprite sprite-php">　 PHP</i><span class="badge">0</span></a></li>
                        <li><a href="Page/Tag/Codeigniter"><i class="sprite sprite-codeigniter">　 Codeigniter</i><span class="badge">3</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="Page/Tag/Python"><i class="sprite sprite-python">　 Python</i><span class="badge">0</span></a></li>
                        <li><a href="Page/Tag/Django"><i class="sprite sprite-django">　 Django</i><span class="badge">0</span></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="Page/Tag/SublimeText"><i class="sprite sprite-sublimetext">　SublimeText</i><span class="badge">1</span></a></li>
                    </ul>
                </li>
                <li>
                    <form class="navbar-form" method="POST" action="Page/Search">
                        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                        <input type="text" name="Search_str" placeholder="搜尋文章..." maxlength="12" required="required" class="form-control form-lg">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
