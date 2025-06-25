@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  {{-- Bootstrap Test Section --}}
  <div class="container mt-4 mb-5 border p-4 bg-light">
    <h2 class="text-center mb-4">Bootstrap Integration Test</h2>
    
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-header bg-primary text-white">
            Style Test
          </div>
          <div class="card-body">
            <button class="btn btn-primary me-2">Primary</button>
            <button class="btn btn-success">Success</button>
            <div class="alert alert-warning mt-3">
              Alert box test
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-header bg-primary text-white">
            Component Test
          </div>
          <div class="card-body">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
              Dropdown
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Item 1</a></li>
              <li><a class="dropdown-item" href="#">Item 2</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Bootstrap Test Section --}}

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection