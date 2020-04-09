@extends('backend.layout.app')

@section('head')
  <title>Cheeki breeki</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
@endsection

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url('images/fake_news.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center">

      <!--========== SITE BLOCK CONTENT  =========-->
      <div class="col-12" data-aos="fade">
        <h1>Insert Title Hier</h1>

        {{-- <form action="#">
          <div class="row mb-3">

            <div class="col-md-9">

              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <input type="text" class="mr-3 form-control border-0 px-4" placeholder="job title, keywords or company name ">
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                  <div class="input-wrap">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control form-control-block search-input  border-0 px-4" id="autocomplete" placeholder="city, province or region" onFocus="geolocate()">
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-3">
              <input type="submit" class="btn btn-search btn-primary btn-block" value="Search">
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="small">or browse by category: <a href="#" class="category">Category #1</a> <a href="#" class="category">Category #2</a></p>
            </div>
          </div>
          
        </form> --}}
      </div>    
      <!--========== SITE BLOCK CONTENT END=========-->

    </div>
  </div>
</div>

<div class="site-section">

  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <h1 style="text-align:center">Some Table</h1> <br> 
        <table id="table_id" class="display">
      </div>
          <thead>
              <tr>
                  <th>Column 1</th>
                  <th>Column 2</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Row 1 Data 1</td>
                  <td>Row 1 Data 2</td>
              </tr>
              <tr>
                  <td>Row 2 Data 1</td>
                  <td>Row 2 Data 2</td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>

</div>

<div style="height: 113px;"></div>
@endsection

@section('script') 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

<script>

    $(document).ready(function(){
			$("#table_id").DataTable();
		});

    document.addEventListener('DOMContentLoaded', function() {
              var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

              for (var i = 0; i < total; i++) {
                  new MediaElementPlayer(mediaElements[i], {
                      pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                      shimScriptAccess: 'always',
                      success: function () {
                          var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                          for (var j = 0; j < targetTotal; j++) {
                              target[j].style.visibility = 'visible';
                          }
                }
              });
              }
          });
</script>
@endsection