@extends("../dashbord")
@section('main-content')
    <div class="col-md-10" style="margin: 0px auto;">
        <div class="tile">
            <div class="tile-body">
                <div  class="text-center mb-4">
                    <a class="btn btn-info" href=" {{route('marques.create')}} ">Ajouter une marque</a>
                  </div>
                <div class="table-responsive">
                    <table class="table table-striped table-success table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Type marque</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                          @foreach ($allmarques as $marque)
                          <tr>
                            <td> {{$marque->type_marque}} </td>
                            <td class="d-flex justify-content-around">
                            
                              <a href=" {{route('marques.edit',['marque'=> $marque->id])}}" class="btn btn-info">Editer</a>
                              <form action="{{route('marques.destroy',['marque'=> $marque->id])}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger m-1">Suprimer</button>
                            </form>
                            </td>
                          </tr>
                          @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection