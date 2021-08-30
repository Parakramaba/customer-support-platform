@extends('layouts.customer')

@section('content')
<div class="container py-5">
    <div class="row">
        {{-- FORM OPEN SUPPORT TICKET --}}
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="font-weight-bold text-center">Inform Your Problem</h3>
                    <form id="formTicket" class="border rounded border-3 p-4">
                        <div class="row">
                            <div class="col-md-12 form-group mt-3">
                                <label for="customerName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Please enter your name..." />
                                <span class="invalid-feedback" id="error-customerName" role="alert"></span>
                            </div>
                            <div class="col-md-12 form-group mt-3">
                                <label for="problemDescription" class="form-label">Problem Description</label>
                                <textarea rows="3" class="form-control" id="problemDescription" name="problemDescription" placeholder="Please enter the problem you have..."></textarea>
                                <span class="invalid-feedback" id="error-problemDescription" role="alert"></span>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Please enter your valid email..." />
                                <span class="invalid-feedback" id="error-email" role="alert"></span>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <label for="telNo" class="form-label">Telephone Number</label>
                                <input type="text" class="form-control" id="telNo" name="telNo" placeholder="ex: 718898123" />
                                <span class="invalid-feedback" id="error-telNo" role="alert"></span>
                            </div>
                        </div>
                    </form>
                    <div class="d-grid col-md-4 mx-auto my-4">
                        <button type="button"  class="btn btn-outline-primary" id="btnOpenTicket" onclick="open_ticket();">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- /FORM OPEN SUPPORT TICKET --}}

        {{-- CHECK THE TICKET STATUS --}}
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="font-weight-bold text-center">Check Your Problem Status</h3>
                    <div class="border rounded border-3 w-100 p-4">
                        <div class="input-group">
                            <input type="text" class="form-control" id="referenceNo" placeholder="Please enter your reference number..." />
                            <button class="btn btn-outline-primary" id="btnTicketStatusCheck" onclick="check_ticket_status();">Check</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- /CHECK THE TICKET STATUS --}}
    </div>
    @include('customer.scripts')
</div>
@endsection
