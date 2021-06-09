
<!-- <a class="btn btn-xs btn-warning" href="{{url('/'.$path.'/edit/'.$model->id)}}"><i class="glyphicon glyphicon-edit"></i> Edit</a>

<form style="display:inline-block;margin-left:5px" action="{{url('/'.$path.'/delete/'.$model->id)}}" method="POST">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i> Delete</button>
</form> -->

    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <!-- <button type="button" class="btn btn-outline-info"><i class="fa fa-eye"></i></button> -->
        <button type="button" class="btn btn-outline-warning" onclick="window.location='{{url('/'.$path.'/edit/'.$model->id)}}'"><i class="fa fa-edit"></i></button>
        <form action="{{url('/'.$path.'/delete/'.$model->id)}}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
        </form>
    </div>
