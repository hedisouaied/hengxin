@extends('backend.layouts.master')


@section('content')


<div class="main-content">
<div class="col-lg-12">
    @include('backend.layouts.notification')
</div>
<h4 class="box-title text-center">Liste des messages</h4>
@if (count($contacts) != 0)


    <table class="table table-striped table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Nom et Prénom</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>S.N</th>
                <th>Nom et Prénom</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($contacts as $item)



                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}} {{$item->lastname}}</td>
                    <td>
                        {{$item->subject}}
                    </td>
                    <td>{{$item->content}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>


                    <td>

                    <form action="{{route('contacts.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="button" data-id="{{$item->id}}" class="float-left dltBtn btn btn-danger btn-sm waves-effect waves-light" style="color:#fff;background-color:#000;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h2 class="text-center">Il n'y a pas de messages pour le moment!</h2>
    @endif
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
                text: "Une fois supprimé, vous ne pourrez pas récupérer ce Message!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                    swal("Poof! Votre Message a été supprimée!", {
                    icon: "success",
                    });
                } else {
                    swal("Votre Message n'est pas supprimée!");
                }
                });
        });
</script>

@endsection
