<div class="col mobile-hidden ps-0">
    <div class="card">
        <div class="card-body">
            <h5 class="h5 blue">@lang('School Menu')</h5>
            <h6 class="h6 gray">@lang('Manage school detail')</h6>
            <hr>
            <ul class="sidebar-ul">
                @foreach ($routes as $count => $route)
                <li class="mb-2">
                    <a class="a-underline blue @if ($tab == $route['name'] && $is_on_page) light-blue disabled @endif"
                       onclick="changeSchoolInfoTab('{{ $route['name'] }}')" href="javascript:void(0)">
                        {{ $route['title'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">@lang('Profile Menu')</h5>
            <h6 class="h6 gray">@lang('Counselor profile account setting')</h6>
            <hr>
            <ul class="sidebar-ul">
                @foreach ($profileroutes as $count => $route)
                    <li class="mb-2">
                        <a class="a-underline blue @if ($tab == $route['name'] && $is_on_page) light-blue disabled @endif"
                           onclick="changeSchoolInfoTab('{{ $route['name'] }}')" href="javascript:void(0)">
                            {{ $route['title'] }}
                        </a>
                    </li>
                @endforeach
{{--                <li class="mb-2"><a class="a-underline blue active" href="#">Basic Info</a></li>--}}
{{--                <li class="mb-2"><a class="a-underline blue" href="#">Email addresses</a></li>--}}
{{--                <li class="mb-2"><a class="a-underline blue" href="#">Phone numbers</a></li>--}}
{{--                <li class="mb-2"><a class="a-underline blue" href="#">Change password</a></li>--}}
{{--                <li class="mb-2"><a class="a-underline blue" href="#">Where you're signed in</a></li>--}}
{{--                <li><a class="a-underline blue" href="#">Two-step verification</a></li>--}}
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">Students Applications</h5>
            <h6 class="h6 gray">Manage students Applications</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="#">Applications List</a></li>
                <li><a class="a-underline blue" href="#">Recommendations Letters</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">My Students</h5>
            <h6 class="h6 gray">Manage students registration</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="#">My Students</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Add New Student</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Add Bulk Students</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Registration Link</a></li>
                <li><a class="a-underline blue" href="#">Registration QR Code</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">Counselor Support</h5>
            <h6 class="h6 gray">Development and Support Center</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="#">Workshops</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Courses</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Events</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Conferences</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">International Trips</a></li>
                <li><a class="a-underline blue" href="#">University Visit</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">School SM Credit</h5>
            <h6 class="h6 gray">Earn SM credit from every activity</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="#">SM credit overview</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">School activity SM credit</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">University activity SM credit</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Student activity SM credit</a></li>
                <li class="mb-2"><a class="a-underline blue" href="#">Convert SM credit</a></li>
                <li><a class="a-underline blue" href="#">SM credit history</a></li>
            </ul>
        </div>
    </div>

    @push(AppConst::PUSH_JS)
        <script type="text/javascript">

            function changeSchoolInfoTab(tab_name) {
                let on_page = '{{$is_on_page}}';
                let base_url =  '{{route('admin.school.information', false)}}';
                if (!on_page) {
                    return window.location = `${base_url}?t=${tab_name}`
                }
                Livewire.emit('schoolInfoTabChanged', tab_name);
                changeActiveLink();
            }

            function changeActiveLink() {
                tablinks = document.getElementsByClassName("a-underline");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace("light-blue disabled", "");
                }
                event.currentTarget.className += " light-blue disabled";
            }
        </script>
    @endpush
</div>
