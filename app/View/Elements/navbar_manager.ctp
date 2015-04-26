<!-- Navigationsbar überall einfügen -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "index")); ?>">YATT- Manager</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "index")); ?>" >Home</a></li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Übersicht<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "show", "manager")); ?>">Manager</a></li>
                        <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "show", "emloyee")); ?>">Mitarbeiter</a></li>
                    </ul>
                </li>
                
                <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "create")); ?>">Benutzer anlegen</a></li>
                <!--class="active"-->
                
                <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "correction_application")); ?>">Korrekturanträge</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $this->Html->url(array("controller" => "manager", "action" => "index")); ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Ende Navigationsbar-->