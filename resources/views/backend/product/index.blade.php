@extends('backend.layouts.master')


@section('content')

<style>
    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 0;
        background-color: #000;
    }
</style>
<div class="main-content">
<div class="col-lg-12">
    @include('backend.layouts.notification')
</div>
<h4 class="box-title"><a class="btn btn-secondary" href="{{route('local.create')}}" ><i class="fa fa-plus-circle"></i> Ajouter local</a></h4>
    <table class="table table-striped table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Prix</th>
                <th>surface</th>
                <th>Type</th>
                <th>Conditions</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.N</th>
                <th>Nom</th>
                <th>Photo</th>
                <th>Prix</th>
                <th>surface</th>
                <th>Type</th>
                <th>Conditions</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($products as $item)

@php
$photo= explode(',',$item->photo);
@endphp

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td><img src="{{$photo[0]}}" alt="{{$item->title}}" style="width:100px;" /></td>
                    <td>$ {{number_format($item->price,2)}}</td>
                    <td>{{$item->surface}}</td>
                    <td>
                        @if ($item->conditions == 'sale')
                            <span class="label label-warning">à vendre</span>
                        @elseif ($item->conditions == 'rent')
                        <span class="label label-primary">à louer</span>
                        @endif
                    </td>
                    <td>
                        @if ($item->fond == 'fdc')
                            <span class="label label-success">Fond de commerce</span>
                        @elseif ($item->fond == 'dab')
                        <span class="label label-danger">Droit au bail</span>
                        @elseif ($item->fond == 'mc')
                        <span class="label label-primary">Mur commerciaux</span>
                        @elseif ($item->fond == 'lp')
                        <span class="label label-info">Location pure</span>
                        @endif
                    </td>
                    <td>
                        <div class="switch success">

                           <input name="toogle" value="{{$item->id}}" type="checkbox" {{$item->status=='active' ? 'checked': ''}} id="switch-{{$item->id}}">
                            <label for="switch-{{$item->id}}">active</label>
                        </div>
                    </td>
                    <td>

                    <form action="{{route('local.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="button" data-id="{{$item->id}}" class="float-left dltBtn btn btn-danger btn-sm waves-effect waves-light" style="color:#fff;background-color:#000;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>


                        <a class="float-left" href="{{route('local.edit',$item->id)}}"><i class="btn btn-warning btn-sm waves-effect waves-light fas fa-pencil-alt" aria-hidden="true"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();

            swal({
                title: "Êtes-vous sûr?",
                text: "Une fois supprimé, vous ne pourrez pas récupérer ce local!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Poof! Votre local a été supprimée!", {
                    icon: "success",
                    });
                } else {
                    swal("Votre local n'est pas supprimée!");
                }
                });
        });
</script>

    <script>
        $('input[name=toogle]').change(function(){
            var mode = $(this).prop('checked');
            var id = $(this).val();
            //alert(id);
            $.ajax({
                url:"{{route('local.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function(response){
                    if(response.status){
                        alert(response.msg);
                    }
                    else{
                        alert('Please try again!');
                    }
                }
            });
        });
    </script>

@endsection
