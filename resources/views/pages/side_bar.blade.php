<aside>
    <div id="sidebar" class="nav-collapse " style="background-color: black">
        <!-- sidebar menu start-->
        @if(Auth::guest())
        @else
            <a class="#" href="{{ url('notes/create') }}">
                <button class="btn btn-primary" style="padding: 5px; margin-bottom: 10px"><i class="fa fa-pencil"></i> Create New Notes</button>
            </a>
        @endif
        <h5 class="category-head"><strong>Top Categories</strong></h5>
        <ul class="sidebar-menu" style="margin-top: 5px">

            <li class="sub-menu">
                <a href="" class="nav-link">
                    <span>Php Programing</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#">
                    <span>Java</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>Web development</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>Android development</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>Python</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>JavaScript</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>Database systems</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="#" class="">
                    <span>Networking</span>
                </a>
            </li>
        </ul>

        <ul class="sidebar-menu">
            <li class="sub-menu">
                <a class="" href="#"><span>Settings</span></a>
            </li>

            <li class="sub-menu">
                <a class="" href="#"><span>Logout</span></a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>