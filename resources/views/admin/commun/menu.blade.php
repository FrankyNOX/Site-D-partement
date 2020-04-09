<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>


    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.sales') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.sales.index') }}">
            <i class="fa fa-home"></i>
            <span>Classes</span>
        </a>
    </li>
    @endif

    <li class="<?php echo ( starts_with($route, ADMIN.'.subjects') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.subjects.index') }}">
            <i class="fa  fa-address-book"></i>
            <span>Matieres</span>
        </a>
    </li>
    <li class="<?php echo ( starts_with($route, ADMIN.'.chapters') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.chapters.index') }}">
            <i class="fa fa-book"></i>
            <span>Chapitres</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.lessons') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.lessons.index') }}">
            <i class="fa fa-bookmark"></i>
            <span>Lecons</span>
        </a>
    </li>

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.comments') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.comments.index') }}">
            <i class="fa fa-comments"></i>
            <span>Commentaires</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.forums') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.forums.index') }}">
            <i class="fa fa-user-plus"></i>
            <span>Forums</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.messages') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.messages.index') }}">
            <i class="fa fa-inbox"></i>
            <span>Messages</span>
        </a>
    </li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Utilisateurs</span>
        </a>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin'))

    @endif
</ul>
