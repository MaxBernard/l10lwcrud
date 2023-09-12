<div class="col-md-12">
  <div class="panel">
    @if (session()->has('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @endif
    
    @if($updateMode)
      @include('livewire.update')
    @else
      @include('livewire.create')
    @endif
    
    <table class="table table-hover table-bordered table-striped table-sm">
      <thead>
        <tr>
          <th width="3%">No.</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th width="190px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
              <button 
                wire:click="show({{ $post->id }})" 
                class="btn btn-info btn-sm">
                <i class="fa fa-eye"></i>
              </button>
              <button 
                wire:click="edit({{ $post->id }})" 
                class="btn btn-warning btn-sm">
                <i class="fa fa-edit ml-1"></i>
              </button>
              <button 
                wire:click="delete({{ $post->id }})" 
                class="btn btn-danger btn-sm">
                <i class="fa fa-edit ml-1"></i>
              </button>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
