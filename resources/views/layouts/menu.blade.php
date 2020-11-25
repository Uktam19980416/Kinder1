<li class="{{ Request::is('kinders*') ? 'active' : '' }}">
    <a href="{{ route('kinders.index') }}"><i class="fa fa-edit"></i><span>Kontaktlar</span></a>
</li>

<li class="{{ Request::is('kinder_news*') ? 'active' : '' }}">
    <a href="{{ route('kinderNews.index') }}"><i class="fa fa-edit"></i><span>So'nggi yangiliklar</span></a>
</li>

{{-- <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li> --}}

<li class="{{ Request::is('courses*') ? 'active' : '' }}">
    <a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Kurslar</span></a>
</li>

<li class="{{ Request::is('teachers*') ? 'active' : '' }}">
    <a href="{{ route('teachers.index') }}"><i class="fa fa-edit"></i><span>O'qituvchilar</span></a>
</li>

<li class="{{ Request::is('parents*') ? 'active' : '' }}">
    <a href="{{ route('parents.index') }}"><i class="fa fa-edit"></i><span>Ota-onalar</span></a>
</li>