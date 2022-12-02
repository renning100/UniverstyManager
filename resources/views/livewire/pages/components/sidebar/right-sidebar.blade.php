<div class="col mobile-hidden pe-0">
    <div class="card">
        <div class="card-body">
            <h5 class="h5 blue">Notifications</h5>
            <h6 class="h6 gray">Stay in touch, Stay connected</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="javascript:void(0)">Students inquiries</a><span class="badge rounded-pill bg-danger align-right float-end">14</span></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Messages</a><span class="badge rounded-pill bg-danger align-right float-end">14</span></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">New Events</a><span class="badge rounded-pill bg-danger align-right float-end">15</span></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Students Chats</a><span class="badge rounded-pill bg-danger align-right float-end">7</span></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Application</a><span class="badge rounded-pill bg-danger align-right float-end">5</span></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">My Scedule</a><span class="badge rounded-pill bg-danger align-right float-end">5</span></li>
                <li><a class="a-underline blue" href="javascript:void(0)">My Calendar</a><span class="badge rounded-pill bg-danger align-right float-end">5</span></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">@lang('Create an Event')</h5>
            <h6 class="h6 gray">@lang('Create and manage events')</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a @class(['a-underline blue','light-blue' => Route::is('admin.school.fair.list')])  href="{{route('admin.school.fair.list')}}">@lang('University Fair')</a></li>
                <li class="mb-2"><a @class(['a-underline blue','light-blue' => Route::is('admin.school.career-talk.list')]) href="{{route('admin.school.career-talk.list')}}">@lang('Career Talk')</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Request a Meeting S2U</a></li>
                <li><a class="a-underline blue" href="javascript:void(0)">Request For Presentation U2S</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">Join Events</h5>
            <h6 class="h6 gray">Find & join Universities events</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="javascript:void(0)">Internation Tours Visit List</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Open day</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Workshop</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Student for a day</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Competition</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Universities List</a></li>
                <li><a class="a-underline blue" href="javascript:void(0)">One to One Meeting</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">Support</h5>
            <h6 class="h6 gray">We are here to help</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="javascript:void(0)">Creat a ticket</a></li>
                <li class="mb-2"><a class="a-underline blue" href="javascript:void(0)">Request Call Back</a></li>
                <li><a class="a-underline blue" href="javascript:void(0)">Chat with us</a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="h5 blue">Share & Suggest</h5>
            <h6 class="h6 gray">Invite Colleagues, & Universities</h6>
            <hr>
            <ul class="sidebar-ul">
                <li class="mb-2"><a class="a-underline blue active" href="javascript:void(0)">Suggest University</a></li>
                <li><a class="a-underline blue" href="javascript:void(0)">Suggest to School</a></li>
            </ul>
        </div>
    </div>

</div>
