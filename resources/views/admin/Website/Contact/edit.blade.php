@extends("admin.base")

@section('title','ContactUs')

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
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">{{__('message.contact_update')}}</h3>
              <form method="post" action="{{url('Website/Contact/Update',$contact->id)}}" enctype="multipart/form-data" autocomplete = "off">
                @csrf
                @method('PUT')
                  <div class="row">
                      <div class="col-md-12 mb-4">

                          <div class="form-outline">
                              <textarea name="description"  class="editor textarea @error('description') is-invalid @enderror" cols="75" rows="5">{{$contact->description}}</textarea>
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
                              <input type="text" id="title" name="street" value="{{$contact->street}}" class="form-control form-control-lg @error('street') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.street')}}</label>
                              @error('street')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4 mb-4">

                          <div class="form-outline">
                              <input type="text" id="fname" name="address" value="{{$contact->address}}" class="form-control form-control-lg @error('address') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.address')}}</label>
                              @error('address')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="email" id="emailAddress" name="email" value="{{$contact->email}}" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.email')}}</label>
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="phone" value="{{$contact->phone}}" class="form-control form-control-lg @error('phone') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.phone')}}</label>
                              @error('phone')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4">

                          <div class="form-outline">
                              <input type="text" id="title" name="facebook" value="{{$contact->facebook}}" class="form-control form-control-lg @error('facebook') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.facebook')}}</label>
                              @error('facebook')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4 mb-4">

                          <div class="form-outline">
                              <input type="text" id="fname" name="instagram" value="{{$contact->instagram}}" class="form-control form-control-lg @error('instagram') is-invalid @enderror" />
                              <label class="form-label" for="fname">{{__('message.instagram')}}</label>
                              @error('instagram')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>
                      </div>


                  </div>

                  <div class="row">

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="linkedin" value="{{$contact->linkedin}}" class="form-control form-control-lg @error('linkedin') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.linkedin')}}</label>
                              @error('linkedin')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="tiktok" value="{{$contact->tiktok}}" class="form-control form-control-lg @error('tiktok') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.tiktok')}}</label>
                              @error('tiktok')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="twitter" value="{{$contact->twitter}}" class="form-control form-control-lg @error('twitter') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.twitter')}}</label>
                              @error('twitter')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="PlayStore" value="{{$contact->PlayStore}}" class="form-control form-control-lg @error('PlayStore') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.play_store')}}</label>
                              @error('PlayStore')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-4 pb-2">

                          <div class="form-outline">
                              <input type="text" id="emailAddress" name="AppleStore" value="{{$contact->AppleStore}}" class="form-control form-control-lg @error('AppleStore') is-invalid @enderror" />
                              <label class="form-label" for="emailAddress">{{__('message.apple_store')}}</label>
                              @error('AppleStore')
                              <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                              @enderror
                          </div>

                      </div>

                      <div class="col-md-4 mb-2 ">
                          <div class="form-outline">
                              <label for="img">{{__('message.Upload Your image')}}: </label>
                              <input type="file" id="img" name="logo" value="{{$contact->logo}}" class="@error('logo') is-invalid @enderror" accept="image/*">
                              @error('logo')
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
