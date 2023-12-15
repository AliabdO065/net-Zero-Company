@extends('dashboard.layouts.layout')

@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar">
          <div class="d-flex flex-column flex-md-row">
            <p class="lead">
              <span class="font-weight-bold">Hi, {{Auth::user()->name}}</span> <span class="d-block text-muted">

                Here's what's up with your business today!" <br>
                Let's catch up on what's happening with your business!
              </span>
            </p>
            <div class="ml-auto">
            </div>
          </div>
          <style>
            .bord{
              border:  2px skyblue solid;
            } 
          </style>
        </header><!-- /.page-title-bar -->
        <!-- .page-section -->
        <div class="page-section">
          <!-- .section-block -->
          <div class="section-block">
            <!-- metric row -->
            <div class="metric-row">
              <div class="col-lg-9 mt-5">
                <div class="metric-row metric-flush">
                  <div class="col ml-6 bord">
                    <!-- .metric -->
                    <a href="{{route('dashboard.projects')}}" class="metric metric-bordered align-items-center">
                      <h2 class="metric-label"> Projects </h2>
                      <p class="metric-value h3">
                        <sub><i class="oi oi-fork"></i></sub> <span class="value">{{count($projects)}} </span>
                      </p>
                    </a> <!-- /.metric -->
                  </div><!-- /metric column -->
                  <!-- metric column -->
                  <div class="col ml-6 bord">
                    <!-- .metric -->
                    <a href="{{route('dashboard.services')}}" class="metric metric-bordered align-items-center">
                      <h2 class="metric-label"> Services </h2>
                      <p class="metric-value h3">
                        <sub><i class="fa fa-server"></i></sub> <span class="value">{{count($services)}} </span>
                      </p>
                    </a> <!-- /.metric -->
                  </div><!-- /metric column -->
                </div>
              </div><!-- metric column -->
              <div class="col-lg-9">
                <div class="metric-row metric-flush">
                  <div class="col ml-6 bord">
                    <!-- .metric -->
                    <a href="{{route('dashboard.news')}}" class="metric metric-bordered align-items-center">
                      <h2 class="metric-label"> News </h2>
                      <p class="metric-value h3">
                        <sub><i class="fa fa-newspaper"></i></sub> <span class="value">{{count($news)}} </span>
                      </p>
                    </a> <!-- /.metric -->
                  </div><!-- /metric column -->
                  <!-- metric column -->
                  <div class="col ml-6 bord">
                    <!-- .metric -->
                    <a href="{{route('dashboard.news.allcomments')}}" class="metric metric-bordered align-items-center">
                      <h2 class="metric-label"> Comments </h2>
                      <p class="metric-value h3">
                        <sub><i class="fa fa-comments"></i></sub> <span class="value">{{count($comments)}} </span>
                      </p>
                    </a> <!-- /.metric -->
                  </div><!-- /metric column -->
                </div>
              </div><!-- metric column -->
            </div><!-- /metric row -->
          </div><!-- /.section-block -->
          <!-- grid row -->
          <div class="row">
            <!-- grid column -->

          </div><!-- /grid row -->
        </div><!-- /.page-section -->
      </div><!-- /.page-inner -->
    </div><!-- /.page -->
  </div>
@endsection