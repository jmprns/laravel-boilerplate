<!doctype html>
<html lang="en">
    <head>

        @include('layouts.partials.meta')

        <title>{{ env('APP_NAME') }}</title>

        @include('layouts.partials.styles')


    </head>
  <body>

    <div class="page">
        @include('layouts.vertical.navigation')
        @include('layouts.partials.header')



      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    @yield('page-pretitle')
                </div>
                <h2 class="page-title">
                    @yield('page-title')
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                @yield('page-action')
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">

                @include('layouts.partials.alerts')

                @section('content')
                @show

                {{ $slot ?? '' }}

          </div>
        </div>
        @include('layouts.partials.footer')

      </div>
    </div>

    @include('layouts.partials.scripts')
  </body>
</html>
