<div class="container-fluid mt-5">
  <h2 class="mb-4 text-center">Users Management</h2>
  <div>
    <input type="text" wire:model.debounce.500ms="search" class="form-control" placeholder="Search by name or email...">
  </div>

  <table class="table table-bordered table-striped mt-3">
    <thead class="table-dark text-center">
      <tr>
        <th>District</th>
        <th>Office</th>
        <th>User Type</th>
        <th>Name</th>
        <th>User Email</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $u)
      <tr class="text-center">
      <td>{{getdist($u->districtcode)}}</td>
      <td>{{getoffice($u->officecode)}}</td>
      <td>{{getusertype($u->usertypecode)}}</td>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td>
        <div class="text-white d-flex align-items-center justify-content-center rounded shadow-sm border border-light 
      {{ $u->status == 1 ? 'bg-success' : 'bg-danger' }}">
        {{ $u->status == 1 ? 'Enabled' : 'Disabled' }}
        </div>
      </td>
      <!-- <td>
      <button class="btn btn-primary btn-sm">Edit</button>
      </td> -->
      <td>
        <button wire:click="toggleStatus({{ $u->id }})"
        class="btn {{ $u->status == 1 ? 'btn-danger' : 'btn-success' }} btn-sm">
        {{ $u->status == 1 ? 'Disable' : 'Enable' }}
        </button>
      </td>

      </tr>
    @endforeach


      <!-- Add more rows as needed -->
    </tbody>

  </table>
  {{ $users->links() }}
</div>