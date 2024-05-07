<div class="container">
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
            <td>{{ $customer->emai }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                <button class="btn btn-info btn-sm">View</button>
                <button class="btn btn-edit btn-sm">View</button>
                <button class="btn btn-danger btn-sm">View</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
