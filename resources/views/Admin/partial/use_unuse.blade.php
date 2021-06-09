<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
        <!-- <button type="button" class="btn btn-outline-info"><i class="fa fa-eye"></i></button> -->
        <button type="button" class="btn btn-outline-warning" onclick="window.location='{{url('/'.$path.'/use/'.$model->id)}}'">Used</button>
        <button type="button" class="btn btn-outline-danger" onclick="window.location='{{url('/'.$path.'/unuse/'.$model->id)}}'">Unused</button>
        <button type="button" class="btn btn-outline-info extend" data-button="{{$model->id}}"><i class="fa fa-arrow-circle-o-right"></i></button>
         
    </div>


    <!-- <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
      
        <button type="button" class="btn btn-outline-warning" onclick="window.location='{{url('/'.$path.'/edit/'.$model->id)}}'"><i class="fa fa-edit"></i></button>
        <form action="{{url('/'.$path.'/delete/'.$model->id)}}" method="POST">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
        </form>
    </div> -->
