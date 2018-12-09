<nav id="sidebar" >
    <ul class=" components" style="padding-top: 0">
        <li class="active">
            <a href="#homeSubmenu"><i class="fa fa-home"></i> Home</a>
        </li>
        @if (Auth::guest())
            @else
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fa fa-user-secret"></i> Account
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#"><i class="fa fa-file-code-o"></i> Notes</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i> Add Notes</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-question"></i> Question</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-circle"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
            </li>
            @endif
        <li>
            <a href="#languageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-code"></i> Programming languages
            </a>
            <ul class="collapse list-unstyled" id="languageSubmenu">
                <li>
                    <a href="#">Basic</a>
                </li>
                <li>
                    <a href="#">Php</a>
                </li>
                <li>
                    <a href="#">java</a>
                </li>
                <li>
                    <a href="#">visual c++</a>
                </li>
                <li>
                    <a href="#">C and C++</a>
                </li>
                <li>
                    <a href="#">Python</a>
                </li>
                <li>
                    <a href="#">Ruby</a>
                </li>
                <li>
                    <a href="#">Advanced delphi</a>
                </li>
                <li>
                    <a href="#">Visual basic</a>
                </li>
                <li>
                    <a href="#">Perl</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#webSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-desktop"></i> Web development
            </a>
            <ul class="collapse list-unstyled" id="webSubmenu">
                <li>
                    <a href="#">JavaScript</a>
                </li>
                <li>
                    <a href="#">Angular</a>
                </li>
                <li>
                    <a href="#">Jquery</a>
                </li>
                <li>
                    <a href="#">Web serves</a>
                </li>
                <li>
                    <a href="#">Web services/SOAP</a>
                </li>
                <li>
                    <a href="#">Apache</a>
                </li>
                <li>
                    <a href="#">Ajax</a>
                </li>
                <li>
                    <a href="#">Bootstrap</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#softSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-code-fork"></i> Software development
            </a>
            <ul class="collapse list-unstyled" id="softSubmenu">
                <li>
                    <a href="#">Algorithms</a>
                </li>
                <li>
                    <a href="#">Object Orientation</a>
                </li>
                <li>
                    <a href="#">Quality testing</a>
                </li>
                <li>
                    <a href="#">Project management</a>
                </li>
                <li>
                    <a href="#">UML modeling</a>
                </li>
                <li>
                    <a href="#">Hacking</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#osSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-shield"></i> Operating systems and platforms
            </a>
            <ul class="collapse list-unstyled" id="osSubmenu">
                <li>
                    <a href="#">Linux programming</a>
                </li>
                <li>
                    <a href="#">Windows programming</a>
                </li>
                <li>
                    <a href="#">Network and security</a>
                </li>
                <li>
                    <a href="#">Bash scripts</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#mediaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-video-camera"></i> Multimedia
            </a>
            <ul class="collapse list-unstyled" id="mediaSubmenu">
                <li>
                    <a href="#">Mp3 programming</a>
                </li>
                <li>
                    <a href="#">Demo programming</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#appSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-globe"></i> Applications
            </a>
            <ul class="collapse list-unstyled" id="appSubmenu">
                <li>
                    <a href="#">Computer graphics</a>
                </li>
                <li>
                    <a href="#">Database and SQL</a>
                </li>
                <li>
                    <a href="#">MySQL</a>
                </li>
                <li>
                    <a href="#">Oracle</a>
                </li>
                <li>
                    <a href="#">SQL Server</a>
                </li>
                <li>
                    <a href="#">Matlab</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-globe"></i> Developers (848)</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-tasks"></i> Jobs (21)</a>
        </li>
    </ul>
</nav>