<!--Search Box-->
<div class="search-field d-none d-sm-none d-md-none d-lg-block">
   <div class="container search-box">
      <div class="row">
         <div class="col-lg-12">
            <h3 class='text-left'><img src='/assets/img/filter/worldwide.png' class='icon-title'>ค้นหาทัวร์</h3>
         </div>
         <div class="col-lg-12">
            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form action="/search-result" method="get">
                     <div class="row">
                        <div class="form-group col-lg-3 mb-2">
                           <label>จุดหมาย</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                              </div>
                              <input type="text" class="form-control search_dynquery" placeholder="ชื่อประเทศ / เมือง" aria-label="Username" name="search_name" id="search_cname" aria-describedby="basic-addon1">
                           </div>
                        </div>
                        <div class="form-group col-lg-3 mb-2">
                           <label>ช่วงเวลาเดินทาง</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                              </div>
                              <select class="form-control" name="search_tour_month">
                                 <option value="">เลือกเดือน</option>
                                 <option value="1">มกราคม</option>
                                 <option value="2">กุมภาพันธ์</option>
                                 <option value="3">มีนาคม</option>
                                 <option value="4">เมษายน</option>
                                 <option value="5">พฤษภาคม</option>
                                 <option value="6">มิถุนายน</option>
                                 <option value="7">กรกฎาคม</option>
                                 <option value="8">สิงหาคม</option>
                                 <option value="9">กันยายน</option>
                                 <option value="10">ตุลาคม</option>
                                 <option value="11">พฤษจิกายน</option>
                                 <option value="12">ธันวาคม</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group col-lg-3 mb-4">
                           <label>รหัสทัวร์</label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                              </div>
                              <input class="form-control" type="text" name="search_tour_code" placeholder="รหัสทัวร์">
                           </div>
                        </div>
                        @csrf
                        <div class="form-group col-lg-3">
                           <label class="d-none d-sm-none d-md-block d-lg-block">&nbsp</label>
                           <button class="form-control btn btn-search" type="sumit" name="button"><i class="fas fa-search"></i> Search</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
               <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End Search Box-->


<!-- Mobile Search Box -->
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <p class="d-md-block d-lg-none d-xl-none">
        <a class="btn btnSearch form-control" data-toggle="collapse" href="#mobilesearch" role="button" aria-expanded="false" aria-controls="mobilesearch">
          <i class="fas fa-search"></i> กล่องค้นหา
        </a>
      </p>
    </div>
  </div>
</div>
<div class="collapse" id="mobilesearch">
  <div class="card card-body">
    <div class="search-field d-md-block d-lg-none d-xl-none">
       <div class="container search-box">
          <div class="row">
             <div class="col-12">
                <h3 class='text-left'><img src='/assets/img/filter/worldwide.png' class='icon-title'>ค้นหาทัวร์</h3>
             </div>
             <div class="col-12">
                <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <form action="/search-result" method="get">
                         <div class="row">
                            <div class="form-group col-12 mb-2">
                               <label>จุดหมาย</label>
                               <div class="input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-city"></i></span>
                                  </div>
                                  <input type="text" class="form-control search_dynquery" placeholder="ชื่อประเทศ / เมือง" aria-label="Username" name="search_name" aria-describedby="basic-addon1">
                               </div>
                            </div>
                            <div class="form-group col-12 mb-2">
                               <label>ช่วงเวลาเดินทาง</label>
                               <div class="input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                                  </div>
                                  <select class="form-control" name="search_tour_month">
                                     <option value="">เลือกเดือน</option>
                                     <option value="1">มกราคม</option>
                                     <option value="2">กุมภาพันธ์</option>
                                     <option value="3">มีนาคม</option>
                                     <option value="4">เมษายน</option>
                                     <option value="5">พฤษภาคม</option>
                                     <option value="6">มิถุนายน</option>
                                     <option value="7">กรกฎาคม</option>
                                     <option value="8">สิงหาคม</option>
                                     <option value="9">กันยายน</option>
                                     <option value="10">ตุลาคม</option>
                                     <option value="11">พฤษจิกายน</option>
                                     <option value="12">ธันวาคม</option>
                                  </select>
                               </div>
                            </div>
                            <div class="form-group col-12 mb-4">
                               <label>รหัสทัวร์</label>
                               <div class="input-group">
                                  <div class="input-group-prepend">
                                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-list-ol"></i></span>
                                  </div>
                                  <input class="form-control" type="text" name="search_tour_code" placeholder="รหัสทัวร์">
                               </div>
                            </div>
                            @csrf
                            <div class="form-group col-12">
                               <label class="d-none d-sm-none d-md-block d-lg-block">&nbsp</label>
                               <button class="form-control btn btn-search" type="sumit" name="button"><i class="fas fa-search"></i> Search</button>
                            </div>
                         </div>
                      </form>
                   </div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
</div>

<!-- End Mobile Search Box-->

<script src="/js/typeahead.js"></script>
<script>
jQuery(document).ready(function($) {
    var engine = new Bloodhound({
        remote: {
            url: '/city-country-search.do?csquery=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    var ccSearchbox = $(".search_dynquery").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">ไม่พบข้อมูล</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                if(data.type == "city"){
                    // Is a city
                    return '<p class="list-group-item">เมือง: ' + data.name + '</p>';
                }else{
                    // Is a country
                    return '<p class="list-group-item">ประเทศ: ' + data.name + '</p>';
                }
            }
        },
    }).on('typeahead:selected', function(obj, os){
        ccSearchbox.typeahead('val',os.name);
    });
});
</script>
