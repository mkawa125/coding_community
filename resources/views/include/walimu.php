{{-- start sidebar --}}
<nav class="navbar-default navbar-static-side" role="navigation">
    {{-- start sidebar collapse --}}
    <div class="sidebar-collapse">

        {{-- start sidebar menu --}}
        <ul class="nav metismenu" id="side-menu">

            {{-- start sidebar header --}}
            <li class="nav-header">

                {{-- start profile element --}}
                <div class="dropdown profile-element">

                    {{-- start user avatar --}}
                    <span title="User Avatar">
	                	<img alt="image" class="img-circle"
                             src="{{Auth::user()->avatar()}}"
                             width="48" height="48" title="User Avatar" />
	                </span>
                    {{-- end user avatar --}}

                    {{-- start user profile toggle actions --}}
                    <a data-toggle="dropdown" class="dropdown-toggle"
                       href="#" title="User Position/Title">
		                <span class="clear">

		                	{{-- start user full name --}}
		                	<span class="block m-t-xs" title="User Name">
		                		<strong class="font-bold">
		                			{{Auth::user()->name}}
		                		</strong>
		                	</span>
		                	{{-- end user full name --}}

		                	{{-- start user title --}}
		                 	<span class="text-muted text-xs block">
			                 {{Auth::user()->title}} <b class="caret"></b>
			                </span>
			                {{-- end user title --}}

			            </span>
                    </a>
                    {{-- end user profile toggle actions --}}

                    {{-- start profile toggle menu --}}
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        @unless(Auth::guest())
                        {{-- <li><a href="#">Profile</a></li> --}}
                        <li>
                            <a href="{{route('membernotices.index', ['member_id' => Auth::user()->id])}}">Notice</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
		                                 document.getElementById('logout-form').submit();">
                                Signout
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </li>
                        @endunless
                    </ul>
                    {{-- end profile toggle menu --}}

                </div>
                {{-- end profile element --}}

            </li>
            {{-- end sidebar header --}}

            {{-- start sidebar menus --}}
            @unless(Auth::guest())
            {{-- TODO add(seed) reports permissions --}}
            <li class="{{areActiveRoutes([
		        	'home',
					'reports.*'
				])}}">
                <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span class="nav-label">Reports</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">

                    {{-- start member master reports --}}
                    @permission([
                    'view:all member master summary',
                    'view:region member master summary',
                    'view:district member master summary',
                    'view:all member master composite summary',
                    'view:region member master composite summary',
                    'view:district member master composite summary',
                    'view:all member master list',
                    'view:region member master list',
                    'view:district member master list',
                    ])
                    <li class="{{areActiveRoutes([
	                		'home',
				        	'reports.member_master_summary',
				        	'reports.member_master_composite_summary',
				        	'reports.member_master_list'
			        	])}}">
                        <a href="#">
                            Member Master<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-third-level">

                            <li class="{{isActiveRoute('reports.member_master_summary')}}">
                                <a href="{{route('reports.member_master_summary')}}">
                                    {{trans('reports.member_master_summary.title_short')}}
                                </a>
                            </li>

                            @permission([
                            'view:all member master composite summary',
                            'view:region member master composite summary',
                            'view:district member master composite summary',
                            ])
                            <li class="{{isActiveRoute('reports.member_master_composite_summary')}}">
                                <a href="{{route('reports.member_master_composite_summary')}}">
                                    {{trans('reports.member_master_composite_summary.title_short')}}
                                </a>
                            </li>
                            @endpermission
                            @permission([
                            'view:all member master list',
                            'view:region member master list',
                            'view:district member master list',
                            ])
                            <li class="{{areActiveRoutes([
			                	'home',
			                	'reports.member_master_list'
			                	])}}">
                                <a href="{{route('reports.member_master_list')}}">
                                    {{trans('reports.member_master_list.title_short')}}
                                </a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    {{-- end member master reports --}}

                    {{-- status member master status reports --}}
                    @permission([
                    'view:all member status master summary',
                    'view:region member status master summary',
                    'view:district member status master summary',
                    'view:all member status master list',
                    'view:region member status master list',
                    'view:district member status master list',
                    ])
                    <li class="{{areActiveRoutes([
				        	'reports.member_status_master_summary',
				        	'reports.member_status_master_list'
			        	])}}">
                        <a href="#">
                            Master Statuses<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-third-level">
                            @permission([
                            'view:all member status master summary',
                            'view:region member status master summary',
                            'view:district member status master summary',
                            ])
                            <li class="{{isActiveRoute('reports.member_status_master_summary')}}">
                                <a href="{{route('reports.member_status_master_summary')}}">
                                    {{trans('reports.member_status_master_summary.title_short')}}
                                </a>
                            </li>
                            @endpermission
                            @permission([
                            'view:all member status master list',
                            'view:region member status master list',
                            'view:district member status master list',
                            ])
                            <li class="{{areActiveRoutes([
			                	'reports.member_status_master_list'
			                	])}}">
                                <a href="{{route('reports.member_status_master_list')}}">
                                    {{trans('reports.member_status_master_list.title_short')}}
                                </a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    {{-- end member master status reports --}}

                    {{-- start expected retirees reports --}}
                    @permission([
                    'view:all expected retirees summary',
                    'view:region expected retirees summary',
                    'view:district expected retirees summary',
                    'view:all expected retirees list',
                    'view:region expected retirees list',
                    'view:district expected retirees list'
                    ])
                    <li class="{{areActiveRoutes([
				        	'reports.expected_retirees_summary',
				        	'reports.expected_retirees_list'
			        	])}}">
                        <a href="#">
                            Expected Retirees<span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-third-level">
                            @permission([
                            'view:all expected retirees summary',
                            'view:region expected retirees summary',
                            'view:district expected retirees summary',
                            ])
                            <li class="{{isActiveRoute('reports.expected_retirees_summary')}}">
                                <a href="{{route('reports.expected_retirees_summary')}}">
                                    {{trans('reports.expected_retirees_summary.title_short')}}
                                </a>
                            </li>
                            @endpermission
                            @permission([
                            'view:all expected retirees list',
                            'view:region expected retirees list',
                            'view:district expected retirees list'
                            ])
                            <li class="{{isActiveRoute('reports.expected_retirees_list')}}">
                                <a href="{{route('reports.expected_retirees_list')}}">
                                    {{trans('reports.expected_retirees_list.title_short')}}
                                </a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    {{-- end expected retirees reports --}}

                    {{-- start claims reports --}}
                    @permission([
                    'view:all member claims summary',
                    'view:region member claims summary',
                    'view:district member claims summary',
                    'view:all member claims list',
                    'view:region member claims list',
                    'view:district member claims list',
                    ])
                    <li class="{{areActiveRoutes([
				        	'reports.member_claims_summary',
				        	'reports.member_claims_list'
			        	])}}">
                        <a href="#">
                            Member Claims <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-third-level">
                            @permission([
                            'view:all member claims summary',
                            'view:region member claims summary',
                            'view:district member claims summary',
                            ])
                            <li class="{{isActiveRoute('reports.member_claims_summary')}}">
                                <a href="{{route('reports.member_claims_summary')}}">
                                    {{trans('reports.member_claims_summary.title_short')}}
                                </a>
                            </li>
                            @endpermission
                            @permission([
                            'view:all member claims list',
                            'view:region member claims list',
                            'view:district member claims list',
                            ])
                            <li class="{{areActiveRoutes([
			                	'home',
			                	'reports.member_claims_list'
			                	])}}">
                                <a href="{{route('reports.member_claims_list')}}">
                                    {{trans('reports.member_claims_list.title_short')}}
                                </a>
                            </li>
                            @endpermission
                        </ul>
                    </li>
                    @endpermission
                    {{-- end claims reports --}}
                </ul>
            </li>

            {{-- start member management --}}
            @permission([
            'list:member', 'list region:member', 'list district:member',
            'list:employer', 'list:membertransfer', 'list:workplace'
            ])
            <li class="{{areActiveRoutes([
	        	'members.*', 'employers.*',
	        	'membertransfers.*', 'workplaces.*',
	        	'memberstatustypes.*'
	        	])}}">
                <a href="#">
                    <i class="fa fa-address-book-o"></i>
                    <span class="nav-label">Members</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">

                    @permission([
                    'list:member', 'list region:member',
                    'list district:member'
                    ])
                    <li class="{{isActiveRoute('members.*')}}">
                        <a href="{{route('members.index')}}">
                            List
                        </a>
                    </li>
                    @endpermission

                    @permission('list:membertransfer')
                    <li class="{{isActiveRoute('membertransfers.*')}}">
                        <a href="{{route('membertransfers.index')}}">
                            Transfers
                        </a>
                    </li>
                    @endpermission

                    @permission('list:employer')
                    <li class="{{isActiveRoute('employers.*')}}">
                        <a href="{{route('employers.index')}}">
                            Employers
                        </a>
                    </li>
                    @endpermission

                    @permission('list:workplace')
                    <li class="{{isActiveRoute('workplaces.*')}}">
                        <a href="{{route('workplaces.index')}}">
                            Workplaces
                        </a>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission
            {{-- end member management --}}

            {{-- start claim management --}}
            @permission([
            'list:claim', 'list:claimtype',
            'list:claimpayment'
            ])
            <li class="{{areActiveRoutes([
	        	'memberclaims.*', 'claimtypes.*',
	        	'claimpayments.*'
	        	])}}">
                <a href="#">
                    <i class="fa fa-credit-card"></i>
                    <span class="nav-label">Claims</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">

                    @permission('list:memberclaim')
                    <li class="{{isActiveRoute('memberclaims.index')}}">
                        <a href="{{route('memberclaims.index')}}">
                            List
                        </a>
                    </li>
                    @endpermission

                    @permission('list:claimpayment')
                    <li class="{{isActiveRoute('claimpayments.index')}}">
                        <a href="{{route('claimpayments.index')}}">
                            Payments
                        </a>
                    </li>
                    @endpermission

                    @permission('list:claimtype')
                    <li class="{{isActiveRoute('claimtypes.index')}}">
                        <a href="{{route('claimtypes.index')}}">
                            Types
                        </a>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission
            {{-- end claim management --}}

            {{-- start notices management --}}
            @permission(['list:noticeboard', 'list:notice', 'list:membernotice'])
            <li class="{{areActiveRoutes([
	        	'noticeboards.*', 'notices.*', 'membernotices.*'
	        	])}}">
                <a href="#">
                    <i class="fa fa-bullhorn"></i>
                    <span class="nav-label">Notices</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">

                    @permission('list:membernotice')
                    <li class="{{isActiveRoute('membernotices.*')}}">
                        <a href="{{route('membernotices.index', ['member_id' => Auth::user()->id])}}">
                            <span class="nav-label">Inbox</span>
                            <span class="label label-danger pull-right"
                                  title="Unread notices">
                                {{ $unread }}
                            </span>
                        </a>
                    </li>
                    @endpermission

                    @permission('list:notice')
                    <li class="{{isActiveRoute('notices.index')}}">
                        <a href="{{route('notices.index')}}">
                            List
                        </a>
                    </li>
                    @endpermission

                    @permission('list:noticeboard')
                    <li class="{{isActiveRoute('noticeboards.index')}}">
                        <a href="{{route('noticeboards.index')}}">
                            Boards
                        </a>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission
            {{-- end notices management --}}

            {{-- start user management --}}
            @permission(['list:user', 'list:role'])
            <li class="{{areActiveRoutes(['users.*','roles.*'])}}">
                <a href="#">
                    <i class="fa fa-address-card"></i>
                    <span class="nav-label">Users</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">

                    @permission('list:user')
                    <li class="{{isActiveRoute('users.*')}}">
                        <a href="{{route('users.index')}}">List</a>
                    </li>
                    @endpermission

                    @permission('list:role')
                    <li class="{{isActiveRoute('roles.*')}}">
                        <a href="{{route('roles.index')}}">Roles</a>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission
            {{-- end user management --}}

            {{-- start location management --}}
            @permission(['list:region', 'list:district', 'list:ward'])
            <li class="{{areActiveRoutes(['regions.*', 'districts.*', 'wards.*', 'zones.*'])}}">
                <a href="#">
                    <i class="fa fa-map-o"></i>
                    <span class="nav-label">Locations</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">

                    @permission('list:ward')
                    <li class="{{isActiveRoute('wards.*')}}">
                        <a href="{{route('wards.index')}}">
                            Wards
                        </a>
                    </li>
                    @endpermission

                    @permission('list:district')
                    <li class="{{isActiveRoute('districts.*')}}">
                        <a href="{{route('districts.index')}}">
                            Districts
                        </a>
                    </li>
                    @endpermission

                    @permission('list:region')
                    <li class="{{isActiveRoute('regions.*')}}">
                        <a href="{{route('regions.index')}}">
                            Regions
                        </a>
                    </li>
                    @endpermission

                </ul>
            </li>
            @endpermission
            {{-- end location management --}}

            {{-- start configure management --}}
            @permission([
            'list:socialfund',
            'list:salarygrade', 'list:disabilitytype',
            'list:qualificationtype', 'list:maritalstatustype',
            'list:membershiptype', 'list:workplacetype',
            'list:subject', 'list:teachlevel', 'list:reportperiod',
            ])
            <li class="{{areActiveRoutes(['socialfunds.*', 'salarygrades.*', 'disabilitytypes.*', 'qualificationtypes.*', 'maritalstatustypes.*', 'membershiptypes.*', 'workplacetypes.*', 'subjects.*',
                'teachlevels.*', 'reportperiods.*'])}}">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="nav-label">Configurations</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level bordered collapse">
                    @permission('list:socialfund')
                    <li class="{{isActiveRoute('socialfunds.*')}}">
                        <a href="{{route('socialfunds.index')}}">
                            Social Funds
                        </a>
                    </li>
                    @endpermission

                    @permission('list:salarygrade')
                    <li class="{{isActiveRoute('salarygrades.*')}}">
                        <a href="{{route('salarygrades.index')}}">
                            Salary Grades
                        </a>
                    </li>
                    @endpermission

                    @permission('list:disabilitytype')
                    <li class="{{isActiveRoute('disabilitytypes.*')}}">
                        <a href="{{route('disabilitytypes.index')}}">
                            Disabilities
                        </a>
                    </li>
                    @endpermission

                    @permission('list:qualificationtype')
                    <li class="{{isActiveRoute('qualificationtypes.*')}}">
                        <a href="{{route('qualificationtypes.index')}}">
                            Qualifications
                        </a>
                    </li>
                    @endpermission

                    @permission('list:maritalstatustype')
                    <li class="{{isActiveRoute('maritalstatustypes.*')}}">
                        <a href="{{route('maritalstatustypes.index')}}">
                            Marital Statuses
                        </a>
                    </li>
                    @endpermission

                    @permission('list:membershiptype')
                    <li class="{{isActiveRoute('membershiptypes.*')}}">
                        <a href="{{route('membershiptypes.index')}}">
                            Membership Types
                        </a>
                    </li>
                    @endpermission

                    @permission('list:membershiptype')
                    <li class="{{isActiveRoute('memberstatustypes.*')}}">
                        <a href="{{route('memberstatustypes.index')}}">
                            Member Statuses
                        </a>
                    </li>
                    @endpermission


                    @permission('list:workplacetype')
                    <li class="{{isActiveRoute('workplacetypes.*')}}">
                        <a href="{{route('workplacetypes.index')}}">
                            Workplace Types
                        </a>
                    </li>
                    @endpermission

                    @permission('list:subject')
                    <li class="{{isActiveRoute('subjects.*')}}">
                        <a href="{{route('subjects.index')}}">
                            Subjects
                        </a>
                    </li>
                    @endpermission

                    @permission('list:teachlevel')
                    <li class="{{isActiveRoute('teachlevels.*')}}">
                        <a href="{{route('teachlevels.index')}}">
                            Teach Levels
                        </a>
                    </li>
                    @endpermission

                    @permission('list:reportperiod')
                    <li class="{{isActiveRoute('reportperiods.*')}}">
                        <a href="{{route('reportperiods.index')}}">
                            Report Periods
                        </a>
                    </li>
                    @endpermission

                    {{-- TODO add work level --}}
                </ul>
            </li>
            @endpermission
            {{-- end confuguration management --}}

            @endunless
            {{-- end sidebar menus --}}

        </ul>
        {{-- end sidebar menu --}}

    </div>
    {{-- end sidebar collapse --}}

</nav>

{{-- end sidebar --}}







{{-- start disabilities details --}}

<hr class="hr-line-dashed m-t-lg" />

{{-- start header --}}
<div class="row m-t-lg">
    <div class="col-md-12">
        <blockquote>
            <h3 title="{{trans('members.headers.disabilities_details.title')}}">
                {{trans('members.headers.disabilities_details.name')}}
            </h3>
        </blockquote>
    </div>
</div>
{{-- end header --}}


<div class="row m-t-md">

    {{-- start has disability --}}
    <div class="col-md-3">
        <div class="form-group">
            <label for="has_disability" title="{{ trans('members.inputs.has_disability.description') }}">
                {{trans('members.inputs.has_disability.label')}}
                <span class="text-danger">*</span>
            </label>
            <div>
                {{-- start yes --}}
                <label class="radio-inline text-black" for="has_disability_1">
                    {{--{!! Form::radio('has_disability', 1, null, [--}}
                    {{--'id' => 'has_disability_1',--}}
                    {{--'aria-describedby'=> 'member_has_disability_help_block',--}}
                    {{--]) !!}--}}
                    {{--{{trans('members.inputs.has_disability.radio.yes')}}--}}
                    <input type="radio" name="first" value="Enable" id="enable">
                    {{trans('members.inputs.has_disability.radio.yes')}}
                </label>
                {{-- end yes --}}
                {{-- start no --}}
                <label class="radio-inline text-black" for="has_disability_0">
                    {{--{!! Form::radio('has_disability', 0, null, [--}}
                    {{--'id' => 'has_disability_0',--}}
                    {{--'aria-describedby'=> 'member_has_disability_help_block',--}}
                    {{--]) !!}--}}
                    {{--{{trans('members.inputs.has_disability.radio.no')}}--}}
                    <input type="radio" name="first" value="Disable" id="disable" checked>
                    {{trans('members.inputs.has_disability.radio.no')}}
                </label>
                {{-- end no --}}
            </div>
            @if($errors->any() && $errors->has('has_disability'))
            {!!
            $errors->first('has_disability', '<p id="member_has_disability_help_block" class="help-block">:message</p>')
            !!}
            @else
            <p id="member_has_disability_help_block" class="help-block">
                {{ trans('members.inputs.has_disability.description') }}
            </p>
            @endif
        </div>
    </div>
    {{-- end has disability --}}

    {{-- start disability --}}
    {{--<form action="#" method="post" id="form">--}}
        {{--<label>Enable / Disable Radio Buttons: </label>--}}
        {{--<input type="radio" name="first" value="Enable" id="enable">--}}
        {{--<span>Enable</span>--}}
        {{--<input type="radio" name="first" value="Disable" id="disable" checked>--}}
        {{--<span>Disable</span>--}}
        {{--<br>--}}
        {{--<label>Radio Buttons :</label>--}}
        {{--<input type="radio" name="second" class="second" value="Radio 1">--}}
        {{--<span class="wrap">Radio 1</span>--}}
        {{--<input type="radio" name="second" class="second" value="Radio 2">--}}
        {{--<span class="wrap">Radio 2</span>--}}
        {{--<input type="radio" name="second" class="second" value="Radio 3">--}}
        {{--<span class="wrap">Radio 3</span>--}}
        {{--</form>--}}

    <div class="col-md-9">
        <div class="form-group {{ $errors->has('disability_id') ? 'has-error' : ''}}">
            <label for="disability_id" title="{{ trans('members.inputs.disability.description') }}">
                {{trans('members.inputs.disability.label')}}
            </label>
            <div>
                @foreach($disabilities->pluck('name', 'id') as $key => $value)
                <label class="radio-inline text-black" for="{{$key}}">
                    {{--{!! Form::radio('disability_id', $key, null, [--}}
                    {{--'id' => $key,--}}
                    {{--'aria-describedby'=> 'member_disability_help_block',--}}
                    {{--]) !!}--}}
                    <input type="radio" name="second" id="second" value="{{ $value }}">
                    {{$value}}
                </label>
                @endforeach
            </div>
            @if($errors->any() && $errors->has('disability_id'))
            {!!
            $errors->first('disability_id', '<p id="member_disability_help_block" class="help-block">:message</p>')
            !!}
            @else
            <p id="member_disability_help_block" class="help-block">
                {{ trans('members.inputs.disability.description') }}
            </p>
            @endif
        </div>
    </div>
    {{-- end disability --}}

</div>

{{-- end has disabilities details --}}


<script type="text/javascript">
    $(document).ready(function() {
// By Default Disable radio button
        $(".second").attr('disabled', true);
        $(".wrap").css('opacity', '.2'); // This line is used to lightly hide label for disable radio buttons.
// Disable radio buttons function on Check Disable radio button.
        $("form input:radio").change(function() {
            if ($(this).val() == "Disable") {
                $(".second").attr('checked', false);
                $(".second").attr('disabled', true);
                $(".wrap").css('opacity', '.2');
            }
// Else Enable radio buttons.
            else {
                $(".second").attr('disabled', false);
                $(".wrap").css('opacity', '1');
            }
        });
    });
</script>