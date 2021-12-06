@extends('backend.layouts.master')


@section('content')


<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-9">
                @include('backend.layouts.notification')
                <div class="box-content card white">
                    <h4 class="box-title">à propos</h4>
                    <!-- /.box-title -->
                    <div class="col-md-12">
                        @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)

                                        <li>{{$error}}</li>

                                        @endforeach

                                    </ul>
                                </div>
                        @endif
                    </div>
                    <div class="card-content">
                        <form action="{{route('about.update')}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleInputEmail1">Titre</label>
                                <input type="text" class="form-control" placeholder="Titre" value="{{$about->heading}}" name="heading">
                            </div>

                            <div class="m-t-20">
                                <label>Image</label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="image" value="{{$about->image}}">
                                  </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;">
                                    <img src="{{$about->image}}" style="margin-top:15px;max-height:100px;" />
                                </div>
                            </div>

                            <div class="m-t-20">
                                <label for="exampleInputEmail1">Description</label>

                                <textarea name="content" class="form-control" id="description" placeholder="Text....">{{$about->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Video</label>
                                <input type="text" class="form-control" placeholder="Lien Youtube de video" value="{{$about->video}}" name="video">
                            </div>
                            <hr style="color: black">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" placeholder="Email" value="{{$about->email}}" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Téléphone</label>
                                <input type="text" class="form-control" placeholder="Téléphone" value="{{$about->phone}}" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse" value="{{$about->address}}" name="address">
                            </div>
                            <div class="form-group">
                                <label>Temps d'ouvrir</label>
                                <input type="time" class="form-control" placeholder="08:00H" value="{{$about->open_time}}" name="open_time">
                            </div>
                            <div class="form-group">
                                <label>Temps de fermer</label>
                                <input type="time" class="form-control" placeholder="17:00H" value="{{$about->close_time}}" name="close_time">
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" placeholder="https://facebook.com/Nomdevotrepagefb" value="{{$about->facebook}}" name="facebook">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepageinsta" value="{{$about->instagram}}" name="instagram">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepagetwitter" value="{{$about->twitter}}" name="twitter">
                            </div>
                            <div class="form-group">
                                <label>Linkedin</label>
                                <input type="text" class="form-control" placeholder="https://instagram.com/Nomdevotrepagelinkedin" value="{{$about->linkedin}}" name="linkedin">
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" class="form-control" placeholder="https://youtube.com/Nomdevotrechaineyoutube" value="{{$about->youtube}}" name="youtube">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Enregistrer</button>
                        </form>
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content -->
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.main-content -->
</div>

@endsection

@section('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
<script>
    $(document).ready(function() {
        $('#description').summernote();
    });
  </script>
@endsection
