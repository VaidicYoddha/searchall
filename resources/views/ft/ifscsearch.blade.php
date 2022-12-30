@extends('master')

@section('title')
Searchall
@endsection


@section('content')


<div class="content-wrapper container-xxl p-0">
    <div class="content-body">


        <!-- vertical tab pill -->

                        <div class="row">
                          <div class="col-12">
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
                            <div class="card">
                                <div class="card-header border-bottom">
                                  <h4 class="card-title">Ifscode: <mark>{{ $search }} </mark> </h4>
                                </div>
                                <div class="card">
                                  <table class=" table table-responsive">
                                      <thead>

                                      </thead>
                                  </table>
                                </div>
                              </div>
                            <div class="">
                              <div class="card-header border-bottom">
                                <h4 class="card-title">Ifscode: <mark>{{ $search }} </mark> </h4>
                              </div>
                              @foreach ($ifsc as $item)
                              <div class="card card-body mt-1">
                                <table class=" table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Ifsccode</th>
                                            <td>
                                             <h5>{!! $item->ifsc !!} </h5> </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>MICR</th>
                                            <td>
                                            <h5> {!! $item->micr !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bank</th>
                                            <td>
                                              <h5> {!! $item->bank !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Branch</th>
                                            <td>
                                              <h5> {!! $item->branch !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>State</th>
                                            <td>
                                              <h5> {!! $item->state !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>District</th>
                                            <td>
                                              <h5> {!! $item->district !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>City</th>
                                            <td>
                                              <h5> {!! $item->city !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Std</th>
                                            <td>
                                              <h5> {!! $item->std !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>
                                              <h5> {!! $item->phone !!} </h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td>
                                              <h5> {!! $item->address!!} </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                </table>
                              </div>
                              @endforeach
                              <section id="ecommerce-pagination">
                                <div class="row">
                                  <div class="col-sm-12">
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination justify-content-center mt-2">
                                        {{-- {{ $ifsc->render() }} --}}

                                      </ul>
                                    </nav>
                                  </div>
                                </div>
                              </section>
                            </div>

                          </div>
                              <!-- side Card -->
                                {{-- @include('inc.sidebar') --}}
                                <!--/ Side Card -->
                        </div>



    </div>
</div>





@endsection
