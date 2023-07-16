@extends('layouts/default')

{{-- Page title --}}
@section('title')
Accept assets  {{ $user->present()->fullName() }}
@parent
@stop

{{-- Account page content --}}
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-default">

      <div class="box-body">
        <!-- checked out Accessories table -->

        <div class="table-responsive">
          <table
                  data-cookie-id-table="pendingAcceptances"
                  data-pagination="true"
                  data-id-table="pendingAcceptances"
                  data-search="true"
                  data-side-pagination="client"
                  data-show-columns="true"
                  data-show-export="true"
                  data-show-refresh="true"
                  data-sort-order="asc"
                  id="pendingAcceptances"
                  class="table table-striped snipe-table"
                  data-export-options='{
                  "fileName": "my-pending-acceptances-{{ date('Y-m-d') }}",
                  "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                  }'>
            <thead>
              <tr>
                <th>Name</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($acceptances as $acceptance)
              <tr>
                <td>{{ ($acceptance->checkoutable) ? $acceptance->checkoutable->present()->name : '' }}</td>
                <td><a href="{{ route('account.accept.item', $acceptance) }}" class="btn btn-default btn-sm">Accept/Decline</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

       </div> <!-- .box-body-->
    </div><!--.box.box-default-->
  </div> <!-- .col-md-12-->
</div> <!-- .row-->

@stop

@section('moar_scripts')
  @include ('partials.bootstrap-table')
@stop
