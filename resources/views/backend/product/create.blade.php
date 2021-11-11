@extends('backend.layouts.master')


@section('content')


<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
            <div class="col-xs-9">
                <div class="box-content card white">
                    <h4 class="box-title">Ajouter local</h4>
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
                        <form action="{{route('local.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom" value="{{old('title')}}" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Réference</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Réference" value="{{old('ref')}}" name="ref">
                            </div>
                            <div class="m-t-20">
                                <label>Photos</label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo">
                                  </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                            </div>

                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Specialité</label>
                                <select class="form-control" name="brand_id">
                                    <option value="">--Specialité--</option>
                                    @foreach (\App\Models\Brand::get() as $brand)

                                    <option value="{{$brand->id}}" {{old('brand_id')==$brand->id? 'selected' : ''}}>{{$brand->title}}</option>


                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Gouvernerat</label>
                                <select id="cat_id" class="form-control" name="cat_id">
                                    <option value="">--Gouvernerat--</option>
                                    @foreach (\App\Models\Category::where('is_parent',1)->get() as $cat)
                                    <option value="{{$cat->id}}" {{old('cat_id')==$cat->id? 'selected' : ''}}>{{$cat->title}}</option>
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
                                <input type="text" class="form-control" placeholder="Adresse" value="{{old('address')}}" name="address">
                            </div>

                            <div class="m-t-20">
                                <label for="exampleInputEmail1">Description</label>

                                <textarea name="description" id="description" class="form-control" maxlength="225" rows="2" placeholder="Write some text....">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Surface</label>
                                <input type="number" class="form-control" placeholder="Surface en m²" value="{{old('surface')}}" name="surface">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facade</label>
                                <input type="number" class="form-control" placeholder="facade en m²" value="{{old('facade')}}" name="facade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rez de chaussée</label>
                                <input type="number" class="form-control" placeholder="rez de chaussée en m²" value="{{old('rdc')}}" name="rdc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Premiére étage</label>
                                <input type="number" class="form-control" placeholder="Premiére étage en m²" value="{{old('petage')}}" name="petage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Prix</label>
                                <input type="number" step="any" class="form-control" placeholder="Price" value="{{old('price')}}" name="price">
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Type</label>
                                <select class="form-control" name="conditions">
                                    <option value="">--Type--</option>
                                        <option value="sale" {{old('conditions')=='sale' ? 'selected' : ''}}>à vendre</option>
                                        <option value="rent" {{old('conditions')=='rent' ? 'selected' : ''}}>à louer</option>

                                </select>
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Conditions</label>
                                <select class="form-control" name="fond">
                                    <option value="">--Conditions--</option>
                                        <option value="fdc" {{old('fond')=='fdc' ? 'selected' : ''}}>Fond de commerce</option>
                                        <option value="dab" {{old('fond')=='dab' ? 'selected' : ''}}>Droit au bail</option>
                                        <option value="mc" {{old('fond')=='mc' ? 'selected' : ''}}>Mur commerciaux</option>
                                        <option value="lp" {{old('fond')=='lp' ? 'selected' : ''}}>Location pur</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lien de video (Optionnel)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lien de video" value="{{old('video')}}" name="video">
                            </div>
                            <div class="form-group">
                                <label >Date de disponibilité</label>
                                <input type="date" class="form-control" value="{{old('date_d')}}" name="date_d">
                            </div>
                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" name="status">
                                        <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                        <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>

                            <div class="form-group margin-bottom-20">
                                <label for="exampleInputEmail1">Extraction</label>
                                <select class="form-control" name="extraction">

                                        <option value="no" {{old('extraction')=='no' ? 'selected' : ''}}>Sans extraction</option>
                                        <option value="yes" {{old('extraction')=='yes' ? 'selected' : ''}}>Avec extraction</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Ajouter</button>
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

        $("#cat_id").change(function(){


                var cat_id=$(this).val();


                if(cat_id != null){
                    //alert(cat_id);
                    $.ajax({
                        url:"/admin/localisation/"+cat_id+"/child",
                        type:"POST",
                        data:{
                            _token:"{{csrf_token()}}",
                            cat_id:cat_id
                        },
                        success:function(response){
                            var html_option = "";
                            if(response.status){
                           //alert(cat_id);
                              $('#child_cat_div').removeClass('display-none');
                              $.each(response.data,function(id,title){
                                html_option += "<option value='"+id+"'>"+title+"</option>";
                              });
                            }else{
                                $('#child_cat_div').addClass('display-none');

                            }
                            $('#child_cat_id').html(html_option);

                        }
                    });
                }
        });
    if(child_cat_id != null){
        $('#cat_id').change();
    }
        </script>
@endsection
