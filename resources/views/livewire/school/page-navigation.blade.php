<div class="container d-flex align-items-center top-menu-container mb-4">
    <!-- Example single danger button -->
    <div class="dropdown menu-item">
        <a class="btn dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown"
           aria-expanded="false">
            @lang('Dashboard')
        </a>

        <ul class="dropdown-menu1 shadow-sm dropdown-menu dropdown-menu-header" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item font-1 font-light" href="#">@lang('Home Page')</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="{{route('admin.school.statistics.show')}}">@lang('Statistics and Analysis')</a></li>
            <div class="dropdown-divider"></div>
            <li>
                <div class="pt-3  font-1 font-normal">@lang('School account')</div>
            </li>
            <li>
                <div class="font-light gray">@lang('Manage School Detail')</div>
            </li>
            <li><a class="dropdown-item font-light pt-3 font-1" href="{{route('admin.school.information')}}?t=basic_info">@lang('School Basic Info')</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="{{route('admin.school.information')}}?t=location_info">@lang('Schools Students')</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="{{route('admin.school.information')}}?t=student_info">@lang('Location and branches')</a></li>
            <div class="dropdown-divider"></div>
            <li>
                <div class="font-1 pt-3 font-normal">@lang('School Counselor Profile')</div>
            </li>
            <li>
                <div class="font-light gray">Counselor Profile account setting</div>
            </li>
            <li><a class="dropdown-item pt-3 font-1 font-light" href="#">Primary Email address</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Phone numbers</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Change Password</a></li>
            <div class="dropdown-divider"></div>
            <li>
                <div class="font-1 pt-3 font-normal">Counselor Support</div>
            </li>
            <li>
                <div class="font-light gray">Development and support center</div>
            </li>
            <li><a class="dropdown-item font-1 pt-3 font-light" href="#">Courses</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Workshops</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Events</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">International Trips</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Conferences</a></li>
        </ul>
    </div>
    <div class="dropdown  menu-item">
        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
           aria-expanded="false">
            School
        </a>

        <ul class="dropdown-menu shadow-sm  dropdown-menu-header dropdown-menu2" aria-labelledby="dropdownMenuLink">
            <li>
                <div class="font-1 font-normal">Create an Event</div>
            </li>
            <li>
                <div class="font-light gray">Create and manage events</div>
            </li>
            <li><a class="dropdown-item font-light pt-3 font-1" href="#">University Fair</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Career Talk</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Request a Meeting S2U</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Request For Presentation</a></li>
            <div class="dropdown-divider"></div>
            <li>
                <div class="pt-3 font-1 font-normal">Join Events</div>
            </li>
            <li>
                <div class="font-light gray">Find and join events</div>
            </li>
            <li><a class="dropdown-item pt-3 font-1 font-light" href="#">University Open day</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Workshops</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Student for a day</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 pt-1 font-light" href="#">Competition</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">International Visit</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">One to One Meeting U2C</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Exhibitions & Fairs</a></li>
        </ul>
    </div>
    <div class="dropdown menu-item">
        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
           aria-expanded="false">
            Students
        </a>

        <ul class="dropdown-menu shadow-sm dropdown-menu-header dropdown-menu3" aria-labelledby="dropdownMenuLink">
            <li>
                <div class="font-1 font-normal">My students</div>
            </li>
            <li>
                <div class="font-light gray">Manage student's registration</div>
            </li>
            <li><a class="dropdown-item font-light pt-3 font-1" href="#">My Students</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Add New Student</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Add Bulk Students</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Registration Link</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Registration QR Code</a></li>
            <div class="dropdown-divider"></div>
            <li>
                <div class="font-1 pt-3 font-normal">Students Applications</div>
            </li>
            <li>
                <div class="font-light gray">Manage students Applications</div>
            </li>
            <li><a class="dropdown-item pt-3 font-1 font-light" href="#">Applications List</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Recommandation Letters</a></li>
        </ul>
    </div>
    <div class="dropdown menu-item">
        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
           aria-expanded="false">
            Universities
        </a>

        <ul class="dropdown-menu shadow-sm dropdown-menu-header dropdown-menu4" aria-labelledby="dropdownMenuLink">
            <li>
                <div class="font-1 font-normal">Join Events</div>
            </li>
            <li>
                <div class="font-light gray">Find & join Universities events</div>
            </li>
            <li><a class="dropdown-item font-light pt-3 font-1" href="#">Internation Tours Visit List</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Open day</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Workshop</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Student for a day</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Competition</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">Universities List</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item font-1 font-light" href="#">One to One Meeting</a></li>
        </ul>
    </div>
    <div class="currency-select">
        <button class="blue" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">USD</button>
    </div>
</div>

