@extends('layouts.seller')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-5 border rounded border-3">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-weight-bold pt-3 text-center">Customer Tickets</h3>
                        <div class="px-3">
                            {{-- SEARCH BY CUSTOMER --}}
                            <div class="border rounded border-3 w-100 p-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Please enter customer name..." />
                                    <button class="btn btn-outline-primary" id="btnSearchCustomer" onclick="search_by_customer();">Search</button>
                                </div>
                            </div>
                            {{-- /SEARCH BY CUSTOMER --}}

                            {{-- TABLE CUSTOMER TICKETS --}}
                            {{-- <table class="table .ticket-yajradt"> --}}
                            <table class="table pt-5">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Customer Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                            </table>
                            {{-- /TABLE CUSTOMER TICKETS --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('seller.scripts')
    @include('seller.modal')
</div>
    
@endsection