<?php
$page_id = 'drag-and-drop';
$title = 'Drag and Drop';
$description = 'HTML5 drag and drop';
include 'includes/header.php';
?>

<style>
   #template {
      background-color: #eee;
      border:1px solid #999;
      width: 300px;
      height: 400px;
      padding: 8px;
      font-size: 1em;
   }
   .brder{
      border-bottom: 1px solid #ddd;
      text-align: left;
      width: 270px;
   }
   .objects{
      display: inline-block;
      background-color: #fff3cc;
      border: #dfbc6a 1px solid;
      width: 60px;
      /*height: 50px;*/
      margin: 10px;
      padding: 8px;
      font-size: 1em;
      line-height: 60px;
      text-align: center;
      box-shadow: 2px 2px 2px #999;
      cursor:move;
   }
   button {
      display: block;
      margin: 15px 0px;
   }
</style>

<script>
   function _(id) {
      return document.getElementById(id);
   }

   function drag_start(event) {
      event.dataTransfer.dropEffect = "move";
      event.dataTransfer.setData("text", event.target.getAttribute('id'));
   }

   function drag_drop(event) {
      event.preventDefault();
      var elem_id = event.dataTransfer.getData('text');
      event.target.appendChild(_(elem_id));

   }
</script>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active"><?php echo htmlspecialchars($title); ?></li>
    </ol>
    <div class="row p1">
        <div class="col-sm-12">
            <h1 class="bounceInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="50" data-wow-iteration="1"><?php echo htmlspecialchars($title); ?></h1>
        </div>
    </div>
    <div class="row p2">
        
        <div class="col-md-8 col-sm-8">        
            <h3>Card Template</h3>
            <div id="template" ondrop="drag_drop(event)" ondragover="return false" ondragleave="drag_leave(event)"></div>

            <div id="object1" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">Object1</div>
            <div id="object2" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">Object2</div>
            <div id="object3" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">Object3</div>

            <button onclick="location.reload()">Start over</button>
       </div>    

        <div class="col-md-4">&nbsp;</div>
      <?php // include 'includes/side-navbar.php'; ?>

    </div>   
    </div><!-- // row -->
</div><!-- // container --><!-- ignore warning; necessary div -->

<?php
include 'includes/footer.php';
?>
