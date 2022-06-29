 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif



                    @if ($usr->can('blog.create') || $usr->can('blog.view') ||  $usr->can('blog.edit') ||  $usr->can('blog.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            BLOG
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.blogs.create') || Route::is('admin.blogs.index') || Route::is('admin.blogs.edit') || Route::is('admin.blogs.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('blog.view'))
                                <li class="{{ Route::is('admin.blogs.index')  || Route::is('admin.blogs.edit') ? 'active' : '' }}"><a href="{{ route('admin.blogs.index') }}">All Blogs</a></li>
                            @endif

                            @if ($usr->can('blog.create'))
                                <li class="{{ Route::is('admin.blogs.create')  ? 'active' : '' }}"><a href="{{ route('admin.blogs.create') }}">Create Blog</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif


                    @if ($usr->can('support.view')) 
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            SUPPORT
                        </span></a>
                        <ul class="collapse {{  Route::is('admin.support.index') || Route::is('admin.support.edit') || Route::is('admin.support.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('support.view'))
                                <li class="{{ Route::is('admin.support.index')  || Route::is('admin.support.edit') ? 'active' : '' }}"><a href="{{ route('admin.support.index') }}">All Supports</a></li>
                            @endif

                           
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('company_profile.create') || $usr->can('company_profile.view') ||  $usr->can('company_profile.edit') ||  $usr->can('company_branch.create')  ||  $usr->can('company_branch.view')  ||  $usr->can('company_branch.edit')
                            ||  $usr->can('company_director.create')  ||  $usr->can('company_director.view')  ||  $usr->can('company_director.edit'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            COMPANY 
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.company.create') || Route::is('admin.company.index') || Route::is('admin.company.edit') || Route::is('admin.company.show') || Route::is('admin.comp_branch.create')  ||  Route::is('admin.comp_branch.edit')  
                                    ||  Route::is('admin.comp_branch.show')  ||Route::is('admin.comp_branch.index') || Route::is('admin.comp_director.create') || Route::is('admin.comp_director.index') || Route::is('admin.comp_director.edit') || Route::is('admin.comp_director.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('company_profile.view'))
                                <li class="{{ Route::is('admin.company.index')  || Route::is('admin.company.edit') ? 'active' : '' }}"><a href="{{ route('admin.company.index') }}"> Company Profile</a></li>
                            @endif

                            @if ($usr->can('company_profile.create'))
                                <li class="{{ Route::is('admin.company.create')  ? 'active' : '' }}"><a href="{{ route('admin.company.create') }}"> Company Profile Create</a></li>
                            @endif

                            @if($usr->can('company_branch.view'))
                            <li class="{{ Route::is('admin.comp_branch.index')  || Route::is('admin.comp_branch.edit') || Route::is('admin.comp_branch.show') ? 'active' : '' }}"><a href="{{ route('admin.comp_branch.index') }}">Branch Profile</a></li>
                            @endif
                            
                            @if($usr->can('company_branch.create'))
                            <li class="{{ Route::is('admin.comp_branch.create')  ? 'active' : '' }}"><a href="{{ route('admin.comp_branch.create') }}">Branch Profile Create</a></li>
                            @endif

                            @if($usr->can('company_director.view'))
                            <li class="{{ Route::is('admin.comp_director.index')  || Route::is('admin.comp_director.edit') || Route::is('admin.comp_director.show') ? 'active' : '' }}"><a href="{{ route('admin.comp_director.index') }}">Director Profile</a></li>
                            @endif

                            @if($usr->can('company_director.create'))
                            <li class="{{ Route::is('admin.comp_director.create')  ? 'active' : '' }}"><a href="{{ route('admin.comp_director.create') }}">Director Profile Create</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif


        <!--------------- Members management    ------------>
                     @if ($usr->can('members_management.create') || $usr->can('members_management.view') ||  $usr->can('members_management.edit') ||  $usr->can('members_management.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            MEMBERS MANAGEMENT
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.members_management.create') || Route::is('admin.members_management.index') || Route::is('admin.members_management.edit') || Route::is('admin.members_management.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('members_management.view'))
                                <li class="{{ Route::is('admin.members_management.index')  || Route::is('admin.members_management.edit') ? 'active' : '' }}"><a href="{{ route('admin.members_management.index') }}">Members</a></li>
                            @endif

                            @if ($usr->can('members_management.create'))
                                <li class="{{ Route::is('admin.members_management.create')  ? 'active' : '' }}"><a href="{{ route('admin.members_management.create') }}">Create Member</a></li>
                            @endif
                        </ul>
                    </li>
                   
                    @endif
            <!---------------end Members management    ------------>

              <!--------------- loan management    ------------>
                    @if ($usr->can('loan_application.create') || $usr->can('loan_application.view') ||  $usr->can('loan_application.edit') ||  $usr->can('loan_application.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            LOAN
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.hr_management.create') || Route::is('admin.hr_management.index') || Route::is('admin.hr_management.edit') || Route::is('admin.hr_management.show') ? 'in' : '' }}">

                        <li class="{{ Route::is('admin.loan_schema.index')  || Route::is('admin.loan_schema.edit') || Route::is('admin.loan_schema.create')? 'active' : '' }}"><a href="{{ route('admin.loan_schema.index')}}">Schema</a></li>

                            @if ($usr->can('loan_application.view') || $usr->can('loan_application.create'))
                                <li class="{{ Route::is('admin.loan_application.index') || Route::is('admin.loan_application.create') || Route::is('admin.hr_management.edit') ? 'active' : '' }}"><a href="{{ route('admin.loan_application.index') }}">Loan Application</a></li>
                            @endif

                            <!-- @if ($usr->can('loan_application.create'))
                                <li class="{{ Route::is('admin.loan_application.create')  ? 'active' : '' }}"><a href="{{ route('admin.loan_application.create') }}">Create Application</a></li>
                            @endif -->

                         
                            
                           
                        </ul>
                    </li>
                   
                    @endif
            <!---------------end loan management    ------------>

                    @if ($usr->can('hr_management.create') || $usr->can('hr_management.view') ||  $usr->can('hr_management.edit') ||  $usr->can('hr_management.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            HR MANAGEMENT
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.hr_management.create') || Route::is('admin.hr_management.index') || Route::is('admin.hr_management.edit') || Route::is('admin.hr_management.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('hr_management.view'))
                                <li class="{{ Route::is('admin.hr_management.index')  || Route::is('admin.hr_management.edit') ? 'active' : '' }}"><a href="">Employees</a></li>
                            @endif

                            @if ($usr->can('hr_management.create'))
                                <li class="{{ Route::is('admin.hr_management.create')  ? 'active' : '' }}"><a href="{{ route('admin.hr_management.create') }}">Create Employees</a></li>
                            @endif
                        </ul>
                    </li>
                   
                    @endif

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->