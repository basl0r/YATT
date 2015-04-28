<!-- Navigationsbar überall einfügen -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "index")); ?>">YATT- Employee</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "index")); ?>" >Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Übersicht<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "show_overview", "month")); ?>" >Monatsübersicht</a></li>
                        <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "show_overview", "year")); ?>">Jahresübersicht</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Korrekturantrag<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "create_correction_application")); ?>" > - erstellen</a></li>
                        <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "show_correction_application")); ?>">- anzeigen</a></li>
                    </ul>
                </li>
                <!--<li><a href="#">Statistiken</a></li>-->
                <!--class="active"-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $this->Html->url(array("controller" => "employee", "action" => "index")); ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Ende Navigationsbar-->