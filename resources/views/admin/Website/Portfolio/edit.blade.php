@extends("admin.base")

@section('title','Portfolio')

@section('content')
<div id="top" class="sa-app__body">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
<!--================Create Box Area =================-->
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body ">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">{{__('message.portfolio_update')}}</h3>
              <form method="post" action="{{url('Website/Portfolio/Update',$Portfolio->id)}}" enctype="multipart/form-data" autocomplete = "off">
                @csrf
                @method('PUT')
                  <div class="row">
                      <div class="col-md-12 mb-4">

                          <div class="form-outline">
                              <textarea name="description"  class="editor textarea @error('description') is-invalid @enderror" cols="75" rows="10">{{$Portfolio->description}}</textarea>
                              <label class="form-label" for="fname">{{__('message.description')}}</label>
                              @error('description')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>
                  </div>

                  <div class="row">

                      <div class="col-md-4 mb-4">

                          <div class="form-outline">
                              <input type="text" id="title" name="category" value="{{$Portfolio->category}}" class="form-control form-control-lg @error('category') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.category')}}</label>
                              @error('category')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4 mb-4">

                          <div class="form-outline">
                              <input type="text" id="fname" name="name" value="{{$Portfolio->name}}" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.name')}}</label>
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="client" value="{{$Portfolio->client}}" class="form-control form-control-lg @error('client') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.client')}}</label>
                              @error('client')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-6 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="url" value="{{$Portfolio->url}}" class="form-control form-control-lg @error('url') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.url')}}</label>
                              @error('url')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-6 mb-2 ">
                          <div class="form-outline">
                              <label for="img">{{__('message.Upload Your image')}}: Main </label>
                              <input type="file" id="img" name="image" value="{{$Portfolio->iamge}}" class="@error('image') is-invalid @enderror" accept="image/*">
                              @error('image')
                              <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                              @enderror
                          </div>
                      </div>

                  </div>

                  <div class="row">
                      <div class="col-md-4 mb-2 ">
                          <div class="form-outline">
                              <label for="img">{{__('message.Upload Your image')}}: Details </label>
                              <input type="file" id="img" name="detailsImage[]" value="{{$Portfolio->detailsImage}}" class="@error('detailsImage') is-invalid @enderror" accept="image/*">
                              @error('detailsImage')
                              <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-4 mb-2 ">
                          <div class="form-outline">
                              <label for="img">{{__('message.Upload Your image')}}: </label>
                              <input type="file" id="img" name="detailsImage[]" value="{{$Portfolio->detailsImage}}" class="@error('detailsImage') is-invalid @enderror" accept="image/*">
                              @error('detailsImage')
                              <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4 mb-2 ">
                          <div class="form-outline">
                              <label for="img">{{__('message.Upload Your image')}}:  </label>
                              <input type="file" id="img" name="detailsImage[]" value="{{$Portfolio->detailsImage}}" class="@error('detailsImage') is-invalid @enderror" accept="image/*">
                              @error('detailsImage')
                              <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                              @enderror
                          </div>
                      </div>
                  </div>


                <div class="mt-2">
                  <input class="btn btn-primary btn-lg" type="submit" value="{{__('message.update')}}" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--================End Create Box Area =================-->
        </div>
    </div>
</div>
@endsection
