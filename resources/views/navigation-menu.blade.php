<nav class="navbar navbar-expand-lg mb-3" style="background-color: #008080;">
  <div class="container-fluid">
    @if (Auth::user()->userrole == 0)
    <a class="navbar-brand text-white" href="#">Super Admin</a>
  @elseif (Auth::user()->userrole == 1)
  <a class="navbar-brand text-white" href="#">Office Admin</a>
@elseif (Auth::user()->userrole == 2)
  <a class="navbar-brand text-white" href="#">FMS User</a>
@else
  <a class="navbar-brand text-white" href="#">Unknown Role</a>
@endif
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li> -->
        @if (Auth::user()->userrole == 0)
      <li class="nav-item">
        <a class="nav-link text-white" href="/usermanagement">User Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">View Participants Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Print Participants Data</a>
      </li>
    @elseif(Auth::user()->userrole == 1)
    <li class="nav-item">
      <a class="nav-link text-white" href="#">View Participants Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">Print Participants Data</a>
    </li>
  @else
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Add VC</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Add Participants</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">View Participants Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Print Participants Data</a>
  </li>
@endif
        <li class="nav-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>