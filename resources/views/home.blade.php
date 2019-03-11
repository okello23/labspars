@extends('layouts.dashboard')

@section('content')
<div class="page_content">
                <div class="container-fluid">


                   <div class="row">
                    <div class="col-lg-12">
                      <h3 class="pull-left">SPIDER GRAPH</h3>
                      </div>
                   </div>


                    <div class="row">
                        <div class="col-md-12">

                                    <div class="panel panel-default">

                                        <div style="width:75%;">

                                            {!! $chartjs->render() !!}

                                        </div>

                                    </div>

                        </div>
                    </div>
                </div>
</div>


	<a type="button" href="{{ url('remoteupload') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus">Remote Upload</span></a>

@endsection


@section('page-js-script')
<script type="text/javascript">


</script>
@stop
