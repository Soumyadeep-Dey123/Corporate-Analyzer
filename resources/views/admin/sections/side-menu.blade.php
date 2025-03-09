<div class="sidebar-header">
    {{-- <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo"> --}}
</div>
<ul class="list-unstyled components text-secondary">
    <li>
        <a href= "{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>Dashboard</a>
    </li>
    <li>
        <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-briefcase"></i>Company Master</a>
        <ul class="collapse list-unstyled" id="uielementsmenu">
            <li>
                <a href="{{ route('admin.company-list') }}"><i class="fas fa-angle-right"></i>Company List</a>
            </li>
            <li>
                <a href="{{ route('admin.employee-list') }}"><i class="fas fa-angle-right"></i>Employee List</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#authmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-book"></i>Question Master</a>
        <ul class="collapse list-unstyled" id="authmenu">
            <li>
                <a href="{{ route('admin.question-list') }}"><i class="fas fa-lock"></i>Question List</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('admin.report') }}"><i class="fas fa-chart-bar"></i>Report Master</a>
    </li>
</ul>
</nav>
<!-- end of sidebar component -->