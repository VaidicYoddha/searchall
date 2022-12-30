@extends('master')

@section('title')
Searchall
@endsection


@section('content')


<div class="content-wrapper container-xxl p-0">
    <div class="content-body">


        <!-- vertical tab pill -->

        <div class="row">
            <div class="col-12 ">
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

                </div>

                    <section id="column-search-datatable">
                        <div class="row">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 ">
                            <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">{{ $bank->name }}</h4>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-responsive table table-responsive">
                                <thead>
                                    <tr><th>id</th>
                                        <th>Ifsc</th>
                                        <th>Micr</th>
                                        <th>Branch</th>
                                        <th>City</th>

                                         <th>Adress</th>
                                         <th>Std</th>
                                          <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ifsc as $item)
                                    <tr>
                                        <td> {{ $item->id }} </td>
                                        <td> {{ $item->ifsc }} </td>
                                        <td> {{ $item->micr }} </td>
                                        <td>{{ $item->branch }}</td>
                                        <td>{{ $item->city }}</td>

                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->std }}</td>
                                        <td>{{ $item->phone }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr><th>id</th>
                                        <th>Ifsc</th>
                                        <th>Micr</th>
                                        <th>Branch</th>
                                        <th>City</th>

                                         <th>Adress</th>
                                         <th>Std</th>
                                          <th>Phone</th>
                                    </tr>
                                </tfoot>
                                </table>
                                {{ $ifsc->links() }}
                            </div>
                            </div>
                        </div>
                        </div>
                    </section>
                    <!--/ Column Search -->

            </div>
            <!-- side Card -->
            {{-- @include('inc.sidebar')  --}}
            <!--/ Side Card -->
        </div>



    </div>
</div>

@endsection


