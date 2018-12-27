<div>
  <div class="container">
     <div class="row">
        <div class="col-lg-12">
           <h3 class="title"><img src='/assets/img/home/icn-recommend.png' class='icon-title'>โปรแกรมทัวร์ยอดนิยม</h3>
        </div>
     </div>
     @foreach($tour_suggest as $show_tour_suggest)
     <div class='row recommend'>
       <div class='col-6 col-md-4 col-lg-3 mb-4'>
         <div>
           <figure>
             <a href='#'>
               <img src='/assets/img/upload/tour/img/{{$show_tour_suggest->tour_img}}'>
             </a>
           </figure>
           <a href='/tour/{{$show_tour_suggest->_id}}'>
             <h1>{{$show_tour_suggest->tour_name}}</h1>
             <h2>วันที่ {{date('d/m/Y',strtotime($show_tour_suggest->tour_start_date[0]))}} ถึง {{date('d/m/Y',strtotime($show_tour_suggest->tour_end_date[0]))}}</h2>
             <p>ราคา {{number_format($show_tour_suggest->tour_price)}} บาท</p>
           </a>
         </div>
       </div>
     </div>
     @endforeach
  </div>
</div>
