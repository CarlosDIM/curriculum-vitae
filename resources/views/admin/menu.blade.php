<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="#"><i class="fa fa-pencil fa-fw"></i> Description<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"> Descriptions</a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Add Description</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Projects</a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Add project</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> About<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class='fa fa-book fa-fw'></i> Studies<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Add Study</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class='fa fa-font fa-fw'></i> Abilities<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Add Ability</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-road fa-fw"></i> Experiences<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class='fa fa-plus fa-fw'></i> Add Experience</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Works<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class='fa fa-plus fa-fw'></i> Add Works</a>
                    </li>

                    <li>
                        <a href="#"><i class='fa fa-laptop fa-fw'></i> Type Works <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"><i class='fa fa-plus fa-fw'></i> Add Type Works</a>
                            </li>

                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-envelope fa-fw"></i> Contact<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class='fa fa-plus fa-fw'></i> Add Contact</a>
                    </li>
                </ul>
            </li>

            <li class="active">
                <a href="#"><i class="fa fa-users fa-fw"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!! URL::to('/users/create') !!}"><i class='fa fa-plus fa-fw'></i> Add User</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('/users') !!}"><i class='fa fa-list-ul fa-fw'></i> Users</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>