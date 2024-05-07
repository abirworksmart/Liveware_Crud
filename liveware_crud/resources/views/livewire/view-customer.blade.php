<div>
    <div class="container">
        <div class="card">
            <h5>About Our Customer: </h5>
            <div class="card-body">
                <h6>Name: {{ $customer->name }}</h6>
                <h6> Email: {{ $customer->email }}</h6>
                <h6>Phone :{{ $customer->phone }}</h6>

                <button wire:navigate href="/customer" class="btn btn-success"> Back</button>
            </div>
        </div>
    </div>
</div>
