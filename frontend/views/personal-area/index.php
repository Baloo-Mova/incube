<?php
/* @var $this yii\web\View */
?>
<h1>personal-area/index</h1>


<div class="container">
	<div class="row well">
		<div class="col-md-2">
    	    <ul class="nav nav-pills nav-stacked well">
              <li  class="active"><a href="#"><i class="fa fa-envelope"></i> Compose</a></li>
              <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-key"></i> Security</a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
        <div class="col-md-10">
                <div class="panel">
                    <img class="pic img-circle" src="http://placehold.it/120x120" alt="...">
                    <div class="name"><small>Apple K, India</small></div>
                    <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>
                </div>
                
    <br><br><br>
    <ul class="nav nav-tabs" id="myTab">
      <li class="active"><a href="#inbox" data-toggle="tab"><i class="fa fa-envelope-o"></i> Inbox</a></li>
      <li><a href="#sent" data-toggle="tab"><i class="fa fa-reply-all"></i> Sent</a></li>
      <li><a href="#assignment" data-toggle="tab"><i class="fa fa-file-text-o"></i> Assignment</a></li>
      <li><a href="#event" data-toggle="tab"><i class="fa fa-clock-o"></i> Event</a></li>
    </ul>
    
    <div class="tab-content">
      <div class="tab-pane active" id="inbox">
        <a type="button" data-toggle="collapse" data-target="#a1">
            <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
              <div class="btn-group"><input type="checkbox"></div>
              <div class="btn-group col-md-3">Admin Kumar</div>
              <div class="btn-group col-md-8"><b>Hi Check this new Bootstrap plugin</b> <div class="pull-right"><i class="glyphicon glyphicon-time"></i> 12:10 PM <button class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-share-square-o"> Reply</i></button></div> </div>
            </div>
        </a>
        <div id="a1" class="collapse out well">This is the message body1</div>
        <br>
        <button class="btn btn-primary btn-xs"><i class="fa fa-check-square-o"></i> Delete Checked Item's</button>
      </div>
     
       
      <div class="tab-pane" id="sent">
            <a type="button" data-toggle="collapse" data-target="#s1">
            <div class="btn-toolbar well well-sm" role="toolbar"  style="margin:0px;">
              <div class="btn-group"><input type="checkbox"></div>
              <div class="btn-group col-md-3">Kumar</div>
              <div class="btn-group col-md-8"><b>This is reply from Bootstrap plugin</b> <div class="pull-right"><i class="glyphicon glyphicon-time"></i> 12:30 AM</div> </div>
            </div>
        </a>
        <div id="s1" class="collapse out well">This is the message body1</div>
        <br>
        <button class="btn btn-primary btn-xs"><i class="fa fa-check-square-o"></i> Delete Checked Item's</button>
      </div>
      
      
     <div class="tab-pane" id="assignment">
        <a href=""><div class="well well-sm" style="margin:0px;">Open GL Assignments <span class="pull-right"><i class="glyphicon glyphicon-time"></i> 12:20 AM 20 Dec 2014 </span></div></a>        
     </div>
     
     <div class="tab-pane" id="event">
       <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object img-thumbnail" width="100" src="http://placehold.it/120x120" alt="...">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Animation Workshop</h4>
                    2Days animation workshop to be conducted
                  </div>
            </div>
    </div>
    
    
        
    </div>

     </div>
	</div>
    
    
</div>




<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><br/><br/>
            <form class="form-horizontal">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="body">Body :</label>  
              <div class="col-md-8">
              <input id="body" name="body" type="text" placeholder="Message Body" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Message :</label>
              <div class="col-md-8">                     
                <textarea class="form-control" id="message" name="message"></textarea>
              </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="send"></label>
              <div class="col-md-8">
                <button id="send" name="send" class="btn btn-primary">Send</button>
              </div>
            </div>
            
            </fieldset>
            </form>

    </div>
  </div>
</div>