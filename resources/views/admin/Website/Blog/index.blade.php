@extends("admin.base")

@section('title','Blog')

@section('content')
<div id="top" class="sa-app__body mt-6">
    <div class="mx-sm-2 px-2 px-sm-3 px-xxl-4 pb-6">
        <div class="container">
<div class="m-portlet m-portlet--mobile col-md-12 col-sm-12 col-lg-12 col-auto">
    <div class="m-portlet__body">

        <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">

                    <div class="card">
                        <div class="p-4">
                            <input type="text" placeholder="Start typing to search for Users" class="typeahead form-control form-control--search mx-auto" id="table-search" /></div>
                        <div class="sa-divider">

                        </div>
                        <table class="sa-datatables-init" data-order="[[ 1, &quot;asc&quot; ]]"
                               data-sa-search-input="#table-search">
                            <thead>
                            <tr>
                                <th class="w-min" data-orderable="false"><input type="checkbox"
                                                                                class="form-check-input m-0 fs-exact-16 d-block" aria-label="..." />
                                </th>
                                <th>{{__('message.category')}}</th>
                                <th>{{__('message.title')}}</th>
                                <th>{{__('message.owner')}}</th>
                                <th>{{__('message.description')}}</th>
                                <th>{{__('message.image')}}</th>
                                <th width='15%'>{{__('message.Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Blogs as $Blog)
                            <tr role="row" class="odd">
                                <td >
                                    <label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand">
                                        <input type="checkbox" value="" class="m-checkable">
                                        <span></span>
                                    </label>
                                </td>
                                <td>{{$Blog->category}}</td>
                                <td>{{$Blog->title}}</td>
                                <td>{{ \App\Models\Admin::where('id',$Blog->admin_id)->select('name')->first()->name}}</td>
                                <td>{{Str::limit($Blog->description,30)}}</td>
                                <td><img src="{{$Blog->image}}" width="50px"></td>
                                <td>
                                    <form method="post" action="{{url('Website/Blog/delete',$Blog->id)}}">
                                        @csrf
                                        @method("delete")
                                        @if(auth('admin')->user()->can('Blog-Delete'))
                                        <button type="submit" class="btn btn-link border-0" style="background: none" title="delete" onclick='return confirm("{{__('message.Are you sure?')}}")'>
                                        <i class="fa-solid fa-trash" style="color:blue"></i>
                                    </button>
                                        @endif
                                        @if(auth('admin')->user()->can('Blog-Edit'))
                                        <a class="" href="{{url('Website/Blog/edit',$Blog->id)}}" title="edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                        @endif
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
    </div>
</div>
        </div>
    </div>
</div>
@endsection
