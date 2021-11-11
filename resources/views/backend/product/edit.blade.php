@extends('backend.layouts.master')


@section('content')


<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-9">
                <div class="box-content card white">
                    <h4 class="box-title">Modifier local</h4>
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
                        <form action="{{route('local.update',$product->id)}}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" value="{{$product->title}}" name="title">
                            </div>
                            <div class="form-group">
                                <label>Réference</label>
                                <input type="text" class="form-control" placeholder="Réference" value="{{$product->ref}}" name="ref">
                            </div>
                            <div class="m-t-20">
                                <label>Photos</label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$product->photo}}">
                                  </div>
                                <div id="holder" style="margin-top:15px;">
                                @php
                                    $ph = explode(',',$product->photo);

                                @endphp
                                @foreach ($ph as $p)
                                    <img src="{{$p}}" style="margin-top:15px;max-height:100px;" />
                                @endforeach
                                </div>
                            </div>

                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Specialité</label>
                                <select class="form-control" name="brand_id">
                                    <option value="">--Specialité--</option>
                                    @foreach (\App\Models\Brand::get() as $brand)

                                    <option value="{{$brand->id}}" {{$product->brand_id==$brand->id? 'selected' : ''}}>{{$brand->title}}</option>


                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Gouvernerat</label>
                                <select id="cat_id" class="form-control" name="cat_id">
                                    <option value="">--Gouvernerat--</option>
                                    @foreach (\App\Models\Category::where('is_parent',1)->get() as $cat)
                                    <option value="{{$cat->id}}" {{$product->cat_id==$cat->id? 'selected' : ''}}>{{$cat->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div id="child_cat_div" class="form-group margin-bottom-20 display-none">
                                <label for="exampleInputEmail1">Délégation</label>
                                <select id="child_cat_id" class="form-control" name="child_cat_id">

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse" value="{{$product->address}}" name="address">
                            </div>

                            <div class="m-t-20">
                                <label for="exampleInputEmail1">Description</label>

                                <textarea name="description" id="description" class="form-control" maxlength="225" rows="2" placeholder="Write some text....">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Surface</label>
                                <input type="number" class="form-control" placeholder="Surface en m²" value="{{$product->surface}}" name="surface">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facade</label>
                                <input type="number" class="form-control" placeholder="facade en m²" value="{{$product->facade}}" name="facade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rez de chaussée</label>
                                <input type="number" class="form-control" placeholder="rez de chaussée en m²" value="{{$product->rdc}}" name="rdc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Premiére étage</label>
                                <input type="number" class="form-control" placeholder="Premiére étage en m²" value="{{$product->petage}}" name="petage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prix</label>
                                <input type="number" step="any" class="form-control" placeholder="Price" value="{{$product->price}}" name="price">
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Type</label>
                                <select class="form-control" name="conditions">
                                    <option value="">--Type--</option>
                                        <option value="sale" {{$product->conditions=='sale' ? 'selected' : ''}}>à vendre</option>
                                        <option value="rent" {{$product->conditions=='rent' ? 'selected' : ''}}>à louer</option>

                                </select>
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Conditions</label>
                                <select class="form-control" name="fond">
                                    <option value="">--Conditions--</option>
                                        <option value="fdc" {{$product->fond=='fdc' ? 'selected' : ''}}>Fond de commerce</option>
                                        <option value="dab" {{$product->fond=='dab' ? 'selected' : ''}}>Droit au bail</option>
                                        <option value="mc" {{$product->fond=='mc' ? 'selected' : ''}}>Mur commerciaux</option>
                                        <option value="lp" {{$product->fond=='lp' ? 'selected' : ''}}>Location pur</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lien de video (Optionnel)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lien de video" value="{{$product->video}}" name="video">
                            </div>
                            <div class="form-group">
                                <label >Date de disponibilité</label>
                                <input type="date" class="form-control" value="{{$product->date_d}}" name="date_d">
                            </div>

                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Extraction</label>
                                <select class="form-control" name="extraction">
                                        <option value="no" {{$product->extraction=='no' ? 'selected' : ''}}>Sans extraction</option>
                                        <option value="yes" {{$product->extraction=='yes' ? 'selected' : ''}}>Avec extraction</option>

                                </select>
                            </div>
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

  <script>
      var child_cat_id = {{$product->child_cat_id}};
      $('#cat_id').change(function(){
        var cat_id=$(this).val();
       // alert(cat_id);
        if(cat_id != null){
            $.ajax({
                url: "/admin/localisation/"+cat_id+"/child",
                type: "POST",
                data:{
                    _token:"{{csrf_token()}}",
                    cat_id:cat_id
                },
                success:function(response){
                    var html_option="";
                    if(response.status){
                        $('#child_cat_div').removeClass('display-none');
                        $.each(response.data,function(id,title){
                            html_option +="<option value='"+id+"' "+(child_cat_id==id ? 'selected' : '')+">"+title+"</option>"
                        });
                    }
                    else{
                        $('#child_cat_div').addClass('display-none');
                    }
                    $('#child_cat_id').html(html_option);
                }
            });
        }


      });
      if(child_cat_id !=null){
         $('#cat_id').change();
     }
  </script>
@endsection
