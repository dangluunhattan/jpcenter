<?php
// lecturers list View with completly new design 
// 
function avatar_available($file) {
    $path = Asset::find_file($file, 'img');

    if ($path) {
        return $path;
    }
    return false;
}

function avatar_show($lecturer) {
    $result = avatar_available($lecturer['img']);

    if ($result) {
        return $result;
    }
    //fallback to default avatar
    if ($lecturer['sex'] == 1) //Male
        return "img/avatar_male.png";
    else   //Female
        return "img/avatar_female.png";
}

?>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/lecturers/list.css">
    <style type="text/css">
        body {
            background-image: url("img/bg1.png") !important;
            background-repeat: repeat;
        }
    </style>
</head>
<br><br><br>
<div class="container bootstrap snippet">
    <?php foreach ($list as $key => $lecturer): ?>
    <div class="col-sm-4">
        <!-- Begin user profile -->
        <div class="box-info text-center user-profile-2">
            <div class="header-cover">
                <img src="img/profile.png" alt="User cover">
            </div>
            <div class="user-profile-inner">
                <h4 class="white"><?php echo $lecturer['name']; ?></h4>
                <img src="<?php avatar_show($lecturer);?>" class="img-circle profile-avatar" alt="User avatar">
                <h5>
                住所: <?php echo $lecturer['address'];?> <br>
                程度: <?php echo $lecturer['degree'];?> <br>
                経験: <?php echo $lecturer['experience'];?> から作業しました。
                </h5>
                
                <!-- User button -->
                <div class="user-button">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm btn-md"><i class="fa fa-envelope"></i> メールをする</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#moreinfo<?php echo $key;?>"> もっと見る</button>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div id="moreinfo<?php echo $key;?>" class="modal" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"><?php echo $lecturer['name'];?>先生</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="col-sm-4 col-md-6">
                                                    <img src="img/avatar.jpg" class="img-circle" alt="<?php echo $lecturer['name'];?>" width="250" height="250">
                                                </div>
                                                <div class="row">
                                                    <ul class="list-group">
                                                        <li><b>お名前:</b> <?php echo $lecturer['name'];?></li>
                                                        <li><b>生年月日:</b> <?php echo $lecturer['date_of_birth'];?></li>
                                                        <li><b>性別:</b> <?php echo $lecturer['sex'];?></li>
                                                        <li><b>メール:</b> <?php echo $lecturer['email'];?></li>
                                                        <li><b>経験:</b> <?php echo $lecturer['experience'];?> </li>
                                                    </ul>
                                                </div>
                                                <div class="row">
                                                    <br>
                                                    <p><?php echo $lecturer['intro'];?></p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    <?php endforeach; ?>
    
</div>
