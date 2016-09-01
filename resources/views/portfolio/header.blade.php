<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <span class="navbar-brand">
                <a href="/laravel/">Sthenos</a>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                <a href="#portfolio">Portfolio</a>
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                {{ $arrData['label'] }}
            </span>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-question" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a>{{ $arrData['info'] }}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a>Test</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>