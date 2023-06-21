@extends("admin.base")

@section('title','Subscription')

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
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">{{__('message.SubscriptionUpdate')}}</h3>
              <form method="post" action="{{url('Subscription/update',$subscription->id)}}" enctype="multipart/form-data" autocomplete = "off">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="title" name="title" value="{{$subscription->title}}" class="form-control form-control-lg @error('title') is-invalid @enderror" />
                      <label class="form-label" for="title">{{__('message.title')}}</label>
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="number" id="period" value="{{$subscription->period}}" name="period" class="form-control form-control-lg @error('period') is-invalid @enderror" />
                            <label class="form-label" for="fname">{{__('message.period')}}</label>
                            @error('period')
                            <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="text" id="emailAddress" value="{{$subscription->description}}" name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" />
                      <label class="form-label" for="emailAddress">{{__('message.description')}}</label>
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                  </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                            <input type="number" id="price" name="price" value="{{$subscription->price}}" class="form-control form-control-lg @error('price') is-invalid @enderror" autocomplete= "new-password" />
                            <label class="form-label" for="phoneNumber">{{__('message.price')}}</label>
                            @error('price')
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
