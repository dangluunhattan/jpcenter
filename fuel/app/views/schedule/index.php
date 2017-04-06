<div class="container">
    <div class="modal fade" id="UserModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">コース #<span id="user_course_id"></span></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            レッスン：<span id="user_subject"></span>
                        </div>
                        <div class="col-md-4">
                            日：<span id="user_days"></span>
                        </div>
                        <div class="col-md-4">
                            時間：<span id="user_time"></span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            教師：<span id="user_teacher"></span>
                        </div>
                        <div class="col-md-4">
                            教室：<span id="user_room"></span>
                        </div>
                        <div class="col-md-4">
                            登録した生徒：<span id="user_reg_student"></span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            開始日：<span id="user_start_date"></span>
                        </div>
                        <div class="col-md-4">
                            終了日：<span id="user_end_date"></span>
                        </div>
                        <div class="col-md-4">
                            学費：<span id="user_fee"></span> <span id="user_fee_unit"></span>
                        </div>
                    </div><hr>                    
                    <p style="text-align: center; font-size: large;">このコースを登録する？</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-warning">登録</button>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="GuestModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">コース #<span id="guest_course_id"></span></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            レッスン：<span id="guest_subject"></span>
                        </div>
                        <div class="col-md-4">
                            日：<span id="guest_days"></span>
                        </div>
                        <div class="col-md-4">
                            時間：<span id="guest_time"></span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            教師：<span id="guest_teacher"></span>
                        </div>
                        <div class="col-md-4">
                            教室：<span id="guest_room"></span>
                        </div>
                        <div class="col-md-4">
                            登録した生徒：<span id="guest_reg_student"></span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            開始日：<span id="guest_start_date"></span>
                        </div>
                        <div class="col-md-4">
                            終了日：<span id="guest_end_date"></span>
                        </div>
                        <div class="col-md-4">
                            学費：<span id="guest_fee"></span> <span id="guest_fee_unit"></span>
                        </div>
                    </div><hr> 
                    <?php echo Form::open(array("action" => "course/register", "class" => "form-vertical")); ?>
                    <p style="font-size: large; margin-left: 10px;">個人情報を入力してください</p>                    
                    <div class="row form">
                        <div class="col-md-4" style="padding: 0px 10px;">
                            <div class="form-group">
                                <?php echo Form::input('name', Input::post('name', ''), array('class' => 'form-control', 'placeholder' => '名前')); ?>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 0px 10px;">
                            <div class="form-group">
                                <?php echo Form::input('email', Input::post('email', ''), array('class' => 'form-control', 'placeholder' => 'メールアドレス')); ?>
                            </div>
                        </div>
                        <div class="col-md-4" style="padding: 0px 10px;">
                            <div class="form-group">
                                <?php echo Form::input('phone', Input::post('phone', ''), array('class' => 'form-control', 'placeholder' => '電話番号')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form">
                        <div class="form-group" style="text-align: center;">
                            <?php echo Form::submit('submit', '登録', array('class' => 'btn btn-warning btn-custom')); ?>
                        </div>
                    </div>  
                    <?php echo Form::close(); ?>   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                    <button type="button" class="btn btn-warning">登録</button>
                </div>
            </div>

        </div>
    </div>


    <h2>教授スケジュール</h2>
    <br>
    <div class="row form">
        <?php echo Form::open(array("class" => "form-vertical", "method" => "get")); ?>
        <div class="col-md-2 col-sm-6 col-xs-12" style="padding: 0px 10px;">
            <div class="form-group">
                <?php
                echo Form::label('日：', 'day', array('class' => 'control-label'));
                foreach ($day as $emp):
                    $selectday[$emp->id] = $emp->name;
                endforeach;
                echo Form::select('day', $select['day'], $selectday, array(
                    'class' => 'form-control selectpicker',
                    'multiple' => 'multiple',
                    'data-actions-box' => 'true',));
                ?>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12" style="padding: 0px 10px;">
            <div class="form-group">
                <?php
                echo Form::label('時間：', 'time', array('class' => 'control-label'));
                foreach ($time as $emp):
                    $selecttime[$emp->id] = $emp->name;
                endforeach;
                echo Form::select('time', $select['time'], $selecttime, array(
                    'class' => 'form-control selectpicker',
                    'multiple' => 'multiple',
                    'data-actions-box' => 'true',));
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 0px 10px;">
            <div class="form-group">
                <?php
                echo Form::label('レッスン：', 'subject', array('class' => 'control-label'));
                foreach ($subject as $emp):
                    $selectsubject[$emp->id] = $emp->name;
                endforeach;
                echo Form::select('subject', $select['subject'], $selectsubject, array(
                    'class' => 'form-control selectpicker',
                    'multiple' => 'multiple',
                    'data-actions-box' => 'true',));
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12" style="padding: 0px 10px;">
            <div class="form-group">
                <?php
                echo Form::label('教師：', 'teacher', array('class' => 'control-label'));
                foreach ($teacher as $emp):
                    $selectteacher[$emp->id] = $emp->fullname;
                endforeach;
                echo Form::select('teacher', $select['teacher'], $selectteacher, array(
                    'class' => 'form-control selectpicker',
                    'multiple' => 'multiple',
                    'data-actions-box' => 'true',));
                ?>
            </div>
        </div>  
        <div class="col-md-2 col-sm-12 col-xs-12" style="padding: 0px 10px;">
            <div class="form-group" style="text-align: center;">
                <?php echo Form::label('zzz', 'submit', array('class' => 'control-label', 'style' => 'visibility: hidden;')); ?>
                <?php echo Form::submit('submit', '適用', array('class' => 'btn btn-info btn-block btn-lg', 'style' => 'max-height: 34px; padding: 6px 12px;')); ?>
            </div>
        </div>  
        <?php echo Form::close(); ?>   
    </div>
    <div class="row">
        <?php if (isset($tabletime)): ?>
            <table class="table">
                <tr class="warning">
                    <th style="min-width: 50px;">教室</th><th style="min-width: 90px;">日</th>
                    <?php foreach ($tabletime as $item): ?>
                        <th><?php echo $item; ?></th>
                    <?php endforeach; ?>
                </tr>
                <?php foreach ($course as $item): ?>
                    <?php for ($i = 1; $i < count($item); $i++): ?>
                        <tr class="active">
                            <?php if ($i == 1) : ?>
                                <th rowspan="<?php echo count($item) - 1; ?>">
                                    <?php echo $item['name']; ?>
                                </th>
                            <?php endif; ?>
                            <td>
                                <?php echo array_values($item)[$i]['name']; ?>
                            </td>
                            <?php $j = 1; ?>
                            <?php foreach ($tabletime as $titem): ?>
                                <?php if (strcmp($titem, array_values(array_values($item)[$i])[$j]['name']) == 0): ?>
                                    <td course_id="<?php echo array_values(array_values($item)[$i])[$j]['id']; ?>"
                                        class="<?php echo!isset($current_user) ? "guest reg" : "user reg"; ?>"
                                        data-target="<?php echo!isset($current_user) ? "#GuestModal" : "#UserModal"; ?>"
                                        data-toggle="modal" >
                                        <p><?php echo array_values(array_values($item)[$i])[$j]['subject']; ?></p>
                                        <p>教師：<?php echo array_values(array_values($item)[$i])[$j]['teacher']; ?></p>
                                        <p>開始日：<?php echo array_values(array_values($item)[$i])[$j]['start_date']; ?></p>
                                        <p>終了日：<?php echo array_values(array_values($item)[$i])[$j]['end_date']; ?></p>
                                    </td>
                                    <?php
                                    if ($j < count(array_values($item)[$i]) - 1) :
                                        $j++;
                                    endif;
                                    ?>
                                <?php else: ?>
                                    <td></td>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tr>
                    <?php endfor; ?>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <div class="nodata">
                データ無し
            </div>
        <?php endif; ?>
    </div>
</div>
<script>
    <?php if (isset($coursedetails)) : ?>
            var js_course = <?php echo json_encode($coursedetails); ?>;
    <?php endif; ?>
    $('.reg').click(function () {
        var $id = $(this).attr('course_id');
        var $usertype = '<?php echo isset($current_user) ? '#user_' : '#guest_'; ?>';
        $($usertype + 'course_id').html($id);
        $($usertype + 'subject').html(js_course[$id]['subject']);
        $($usertype + 'days').html(js_course[$id]['days']);
        $($usertype + 'time').html(js_course[$id]['time']);
        $($usertype + 'teacher').html(js_course[$id]['teacher']);
        $($usertype + 'reg_student').html(js_course[$id]['reg_student']);
        $($usertype + 'room').html(js_course[$id]['room']);
        $($usertype + 'start_date').html(js_course[$id]['start_date']);
        $($usertype + 'end_date').html(js_course[$id]['end_date']);
        $($usertype + 'fee').html(js_course[$id]['fee']);
        $($usertype + 'fee_unit').html(js_course[$id]['fee_unit']);
    });

    $(document).ready(function () {
        $('#form_day, #form_time, #form_subject, #form_teacher').multiselect();
    });
</script>
