@extends('master')

@section('title')
Searchall
@endsection


@section('content')


<div class="content-wrapper container-xxl p-0">
    <div class="content-body">


        <!-- vertical tab pill -->

                        <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class=" col-lg-4 col-md-4 col-sm-12 d-flex">
                                    <div class=" card-body ">

                                        <form action="{{ url('/result/ifsccode') }}" class="faq-search-input" method="GET">
                                            @csrf
                                            <Label>IFSCCODE Search </Label>
                                            <input name="search" class="form-control" type="text" placeholder="Search">
                                        </form>
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-4 col-sm-12 d-flex">
                                    <div class=" card-body ">

                                        <form action="{{ url('/result/pincode') }}" class="faq-search-input" method="GET">
                                            @csrf
                                            <Label>PINCODE Search </Label>
                                            <input name="search" class="form-control" type="text" placeholder="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                              <div class="card-header border-bottom">
                                <h4 class="card-title">Result : {{ $search }}</h4>
                                <div>
                                    <a href="{{ url('/') }}"
                                   class="btn btn-dark float-between" >Back </a>
                               </div>
                              </div>
                              @foreach ($pincode as $item)
                              <div class="card card-body mt-1">

                                <table class=" table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Pincode</th>
                                            <td>
                                             <h5>{!! $item->pincode !!} </h5> </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Village/Locality</th>
                                            <td>
                                            <h5> {!! $item->location !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>office</th>
                                            <td>
                                              <h5> {!! $item->office !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>
                                              <h5> {!! $item->city !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>District</th>
                                            <td>
                                              <h5> {!! $item->district !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>
                                              <h5> {!! $item->state !!} </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>

                            </div>
                            @endforeach
                            {{ $pincode->links() }}
                                {{-- {{ $pincode->render(); }} --}}
                          </div>
                              <!-- side Card -->
                                {{-- @include('inc.sidebar') --}}
                                <!--/ Side Card -->
                        </div>



    </div>
</div>





@endsection
