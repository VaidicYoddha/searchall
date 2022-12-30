@extends('master')

@section('title')
Searchall
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')


<div class="content-wrapper container-xxl p-0">
    <div class="content-body">


        <!-- vertical tab pill -->

        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12 ">
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


                <div class="card ">
                    <div class="card-header">
                        <h2>Ifsccode Data </h2>
                    </div>
                    <div class="card-body">
                        <livewire:ifsc-table/>
                    </div>

                </div>

                <div class="card ">
                    <div class="card-header">
                        <h2>Pincode Data</h2>
                    </div>
                    <div class="card-body">
                        <livewire:pincode-table/>
                    </div>

                </div>

                    {{-- <section id="column-search-datatable">
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">ALl IFSC Search</h4>
                            </div>
                            <div class="card-datatable">
                                <table class="dt-column-search dt-responsive table table-responsive">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ifsc</th>
                                        <th>bank</th>
                                        <th>city</th>
                                        <th>address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ifsc as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td> {{ $item->ifsc }} </td>
                                        <td>{{ $item->bank }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->address }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>ifsc</th>
                                        <th>bank</th>
                                        <th>city</th>
                                        <th>address</th>
                                    </tr>
                                </tfoot>
                                </table>
                                {{ $ifsc->links() }}
                            </div>
                            </div>
                        </div>
                        </div>
                    </section> --}}
                    <!--/ Column Search -->

                <div class="card ">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">All Banks IFSC Codes</h4>
                    </div>
                    <div class="card-datatable">
                        <table class=" table table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Bank</th>
                                </tr>
                            </thead>
                            @forelse ($banks as $item)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $item->bankno }}
                                    </td>
                                    <td>
                                        <a href="{{ url('home/ifsc/'.$item->id) }}">
                                            {{ $item->name }}
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                            No Data Avilable
                            @endforelse

                        </table>
                    </div>
                </div>
            </div>
            <!-- side Card -->
            {{-- @include('inc.sidebar')  --}}
            <!--/ Side Card -->
        </div>



    </div>
</div>

@endsection


