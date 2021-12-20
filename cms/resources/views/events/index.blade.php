@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('events.create')}}" class="btn btn-success">Add Event</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Events
    </div>
    <div class="card-body">
        @if ($events->count() > 0)
        <table class="table">
            <thead>
                <th>Title</th>
                <th>Content</th>
                <th>Held On</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($events as $event)
                <tr>
                    <td>
                        {{$event->title}}
                    </td>
                    <td>
                        {{$event->content}}
                    </td>
                    <td>
                        {{$event->held_on}}
                    </td>
                    <td>
                        <td>
                            <a href="{{route('events.edit', $event->id)}}" class="btn btn-info btn-sm">
                            Edit
                            </a>
                            <form method="POST" action="{{route('events.destroy', $event->id)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>       
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        @else
        <h3 class="text-center">No events yet</h3>  

        @endif  
        
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <form action="" method="POST" id="deleteEventForm">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLabel">Delete Event</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p class="text-center text-bold">
                          Are you sure you want to delete this event?
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Go back</button>
                      <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id){
            
            var form = document.getElementById('deleteEventForm')
            form.action = '/events/' + id
            console.log('deleting.', form)
            $('#deleteModal').modal('show')
        }

    </script>
@endsection