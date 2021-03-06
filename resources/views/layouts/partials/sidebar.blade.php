<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="/dashboard"><i class='ion ion-android-apps'></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class='ion ion-clipboard'></i> <span>Casos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/tickets">Todos Los Casos</a></li>
                    <li><a href="/tickets/create">Crear Un Caso</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='ion ion-person-stalker'></i> <span>Promotores</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/promoters">Todos Promotores</a></li>
                    <li><a href="/promoters/create">Crear Un Promotor</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-truck'></i> <span>Constructores</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/builders">Todos Constructores</a></li>
                    <li><a href="/builders/create">Crear Un Constructor</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
