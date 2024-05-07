<div class="container">
    <a wire:navigate href="/customers/create" class="btn btn-success">Add Data</a>
    <livewire:flash-message/>
    {{-- add modal --}}

       {{-- End modal --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)

          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email}}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <button wire:navigate href="/customer/view/{{ $customer->id }}" class="btn btn-info btn-sm">View</button>
                <button wire:navigate href="/customer/edit/{{ $customer->id }}"class="btn btn-success btn-sm">Edit</button>
                <button onclick="confirmDelete(event)" wire:click="deleteCustomer({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button>
<script>
    function confirmDelete(e) {
        if (!confirm('Are you sure?')) {
            e.preventDefault();
            // Stops the deletion process
        }
    }
</script>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
