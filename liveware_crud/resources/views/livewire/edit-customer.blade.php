<div class="container">
    <div class="card">
        <div class="card-header">
          Livewire Crud Edit
        </div>
        <div class="card-body">
            <form wire:submit = "updateCustomer">
                {{-- In Livewire\Component;  public function save(){dd('endpoint hit');} --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" wire:model="name"  aria-describedby="emailHelp">
                    <div>
                        @error('name')
                        <span class="text-danger"> {{ $message }}</span>

                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" wire:model="email" aria-describedby="emailHelp">
                  <div>
                    @error('email')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" id="phone"  wire:model="phone">
                  <div>
                    @error('phone')
                    <span class="text-danger"> {{ $message }}</span>

                    @enderror
                </div>
                </div>
                <button wire:navigate href= '/customer' class="btn btn-secondary">Back</button>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
      </div>
</div>
