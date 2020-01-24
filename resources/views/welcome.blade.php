@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-3">
  <aside class="menu-sidebar d-none d-lg-block">
      <div class="menu-sidebar__content js-scrollbar1">
          <nav class="navbar-sidebar">
              <ul class="list-unstyled navbar__list">
                  <li class="has-sub">
                    <li class="active">
                      <a href="index.php">
                      Dashboard</a>
                  </li>
                  </li>
                  <li>
                      <a href="#">
                      Page 1</a>
                  </li>
                  <li>
                      <a href="#">
                      Page 2</a>
                  </li>
                  <li>
                      <a href="#">
                      Page 3</a>
                  </li>
                  <li>
                      <a href="#">
                      Page 4</a>
                  </li>
                  <li>
                      <a href="#">
                      Page 5</a>
                  </li>
                      </ul>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
</div>

<div class="col-9">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#00A9A5;color:white;">
                    <h3 class="text-center p-3">150</h3>
                    <h5 class="pl-2">Total Owners</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#6969B3;color:white;">
                    <h3 class="text-center p-3">15</h3>
                    <h5 class="pl-2">States Covered</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div calss="card-body" style="background-color:#62466B;color:white;">
                    <h3 class="text-center p-3">10,000</h3>
                    <h5 class="pl-2">Records</h5>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection