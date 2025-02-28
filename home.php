<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.event-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }
    .banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;
    }
.event-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}

.event-list .banner {
    width: calc(40%)
}
.event-list .card-body {
    width: calc(60%)
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.hightlight{
    background: yellow;
}
.banner{
   min-height: calc(100%)
}
</style>  




   
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Welcome to HSTU Alumni Association</h3>
                        <hr class="divider my-4" />
                      
                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                     
                </div>
            </div>
             
        </header>
          
            <div class="container mt-3 pt-2">
                <h4 class="text-center text-white">Upcoming Events</h4>
                <hr class="divider">
                <?php
                $event = $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' order by unix_timestamp(schedule) asc");
                while($row = $event->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['content']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card event-list" data-id="<?php echo $row['id'] ?>">
                     <div class='banner'>
                        <?php if(!empty($row['banner'])): ?>
                            <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt"><?php echo ucwords($row['title']) ?></b></h3>
                                <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                                <br>
                                <hr class="divider"  style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                <?php endwhile; ?>
                
            </div>
              <section class="bg-white">
                 <div class="container mt-3 pt-2">
                        <h4 class="text-center"
                 style="color: black;" "><i> NewsPortal</i></h4>
                        <hr class="divider">

                 



                 <div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="./assets/img/hstu_logo.png"  class="card-img-top" height="200" weidth="150" alt="News Image">
                <div class="card-body">
                    <h5 class="card-title">HSTU Newsportal</h5>
                    <p class="card-text">A short description or summary of the news content goes here. It should give readers a brief idea of the story.</p>
                    <a href="https://www.rtvonline.com/others/education/289156" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://cdn.ittefaqbd.com/contents/cache/images/1100x0x1/uploads/media/2024/08/09/58540db98311a1ee12b6c7efc9683e04-66b62f1aa6dea.jpg?jadewits_media_id=180604" class="card-img-top" height="200" weidth="150" alt="News Image">
                <div class="card-body">
                    <h5 class="card-title">Vice Chancellor Resign</h5>
                    <p class="card-text">A short description or summary of the news content goes here. It should give readers a brief idea of the story.</p>
                    <a href="https://www.ittefaq.com.bd/695925/%E0%A6%B9%E0%A6%BE%E0%A6%AC%E0%A6%BF%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A6%BF%E0%A6%B0-%E0%A6%AD%E0%A6%BF%E0%A6%B8%E0%A6%BF-%E0%A6%95%E0%A6%BE%E0%A6%AE%E0%A6%B0%E0%A7%81%E0%A6%9C%E0%A7%8D%E0%A6%9C%E0%A6%BE%E0%A6%AE%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A6%A6%E0%A6%A4%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%97" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="./assets/img/gate.jpg" class="card-img-top"height="200" weidth="150" alt="News Image">
                <div class="card-body">
                    <h5 class="card-title">Students Protest</h5>
                    <p class="card-text">A short description or summary of the news content goes here. It should give readers a brief idea of the story.</p>
                    <a href="https://www.jugantor.com/index.php/todays-paper/last-page/272124/%E0%A6%B9%E0%A6%BE%E0%A6%AC%E0%A6%BF%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A6%BF%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BE%E0%A6%B8%E0%A6%A8%E0%A6%BF%E0%A6%95-%E0%A6%AD%E0%A6%AC%E0%A6%A8%E0%A7%87-%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A6%B2%E0%A7%80%E0%A6%97%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BE" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

     
        </div>
     <br>
     <br>
     <br>



              </section>
         
                 
            <div class="container mt-3 pt-2">
            <h4 class="text-center text-white">Executive Committee</h4>
                <hr class="divider">

            <div class="container-fluid mt-3 pt-2">
               
               <div class="row-items">
               <div class="col-lg-12">
                   <div class="row">
               <?php
               $fpath = 'admin/assets/uploads';
               $committee = $conn->query("SELECT * FROM committee ");
               while($row = $committee->fetch_assoc()):
               ?>
               <div class="col-md-4 item">
               <div class="card committee-list" data-id="<?php echo $row['id'] ?>">
                       <div class="committee-img" card-img-top>
                       <!-- <img src="<?php echo isset($img) ? 'admin/assets/uploads/'.$img :'' ?>" alt="" id="img-field" height="100" weidth="50"> -->
                       <div class="card-body d-flex justify-content-center"> <img src="<?php echo $fpath.'/'.$row['img']  ?>" class="rounded-circle" height="150" weidth="150" alt="">
                      </div> </div>
                   <div class="card-body">
                       <div class="row align-items-center h-100">
                           <div class="">
                               <div>
                               <p class="filter-txt"><b><?php echo $row['name'] ?></b></p>
                               <hr class="divider w-100" style="max-width: calc(100%)">
                               <p class="filter-txt">Post: <b><?php echo $row['post'] ?></b></p>
                               <p class="filter-txt">Student ID: <b><?php echo $row['sid'] ?></b></p>
                               <p class="filter-txt">Batch: <b><?php echo $row['batch'] ?></b></p>
                               <p class="filter-txt">Currently working in :  <b><?php echo $row['working'] ?></b></p>
                                   <br>
                               </div>
                           </div>
                       </div>
                       

                   </div>
               </div>
               <br>
               </div>
               <?php endwhile; ?>
               </div>
               </div>
               </div>
        
                </div>

            </div>
           

            


<script>
     $('.committee-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>