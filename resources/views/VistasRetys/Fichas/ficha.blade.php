@extends('VistasRetys.layoutCards')

@section('tarjetas')

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

<link rel="stylesheet" href="{{ asset('css/cedulaStyle.scss') }}">

<div class="tabs">
    <div class="tab-header">
      <div class="active">
        <i class="fa fa-code"></i> Code
      </div>
      <div>
        <i class="fa fa-pencil-square"></i> About
      </div>
      <div>
        <i class="fa fa-bar-chart"></i> Services
      </div>
      <div>
        <i class="fa fa-envelope"></i> Contact
      </div>
    </div>
    <div class="tab-indicator"></div>
    <div class="tab-content">

      <div class="active">
        <i class="fa fa-code"></i>
        <h2>This is code section</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
      </div>

      <div>
        <i class="fa fa-pencil-square"></i>
        <h2>This is about section</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
      </div>

      <div>
        <i class="fa fa-bar-chart"></i>
        <h2>This is services section</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <h2>This is contact section</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
      </div>

    </div>
  </div>

<script src="{{ asset('js/verticalTabs.js') }}"></script>

@endsection
