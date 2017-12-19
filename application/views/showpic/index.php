<!DOCTYPE html>
<html>
<head>
    <title>Picture Show</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../statics/showPic/core.css">
    <script type="text/javascript" src="../../statics/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../statics/js/jquery-ui-1.8.custom.min.js"></script>
    <script type="text/javascript">

        $(function(){
            var all=$('#showSubject li').length;
            $('#labForm').submit(function(){ return false; } );

            $('#testSubject').sortable({});  //使得图片是可以排列的


            $('#showSubject li').bind("click",function(){
                $(this).hide();
                $('#myLike').append(''+' <li class="showImage"><img class="imgshow" src="'+$('img.imgshow',this).attr('src')+'" alt="sortable 1" title="test"></li>'+'');
                });
            //加载更多的图片在 showSubject里面
            $('#load_more').click(
                function () {
                    var number=$('#showSubject li').filter(function(){ return $(this).css('display')==='none';});
                    $('#showSubject li').filter(function(){ return $(this).css('display')==='none';}).remove();
                    $.ajax({ type: "POST",url:"showPic/getMore",data:{'all':all},success:function (data) {
                            var b=$.parseJSON(data);//解析返回的数据
                            console.log(b.all); //获取的数据
                            console.log(b.more);
                            $.each(b.more,function (i,item) {
                                $('#showSubject').append('<li class="showImage" onclick="javascript:hideImage($(this));"><img class="imgshow" src="'+'<?php echo base_url(); ?>'+item.path+'" alt="sortable 1" title="'+item.content+'"></li>');
                            });

                        }});
                });
        });
        function hideImage(op) {
            op.hide();
            $('#myLike').append(''+' <li class="showImage"><img class="imgshow" src="'+$('img.imgshow',op).attr('src')+'" alt="sortable 1" title="test"></li>'+'');
        }
    </script>

    <style>
        #buttonBar {
            clear: both;
            padding-top: 12px;
        }
        #column2 input[type=text] {
            width: 32px;
        }
        #labForm label {
            float: left;
            text-align: right;
            width: 100px;
            font-weight: bold;
            margin-right: 6px;
        }
        #column2 label {
            width: 100px;
        }
        #testSubjectPanel {
            float: left;
            width: 950px;
        }
        #likeSubjectPanel{
            float: left;
            width: 100px;
        }
        #myLike
        {
            list-style: none;
            padding: 21px;
        }
        ul.testSubject {
            float: left;
            list-style: none;
            display: inline;
            padding: 0;
        }

        li.showImage{
            float: left;
            width: 100px;
            height: 100px;
            padding: 3px 3px 3px 3px;
        }
        .imgshow{
            width: 100%;
            height: 100%;
        }



    </style>
</head>

<body class="fancy">
<div>
    <div id="pageContainer">
        <div id="pageContent">
            <h1>选择你认为漂亮的图片</h1>
            <div data-module="Control Panel">
                <div>
                    <h3>Executed command:</h3>
                    <div id="commandDisplay">点击喜欢的图片</div>
                </div>
            </div>

            <div data-module="Test Subjects2">
                <div id="testSubjectPanel">
                    <ul class="testSubject" id="showSubject">
                        <?php foreach ($pic_source as $item){
                            echo '<li class="showImage"><img class="imgshow" src="'.base_url().$item['path'].'" alt="sortable 1" title="'.$item['content'].'"></li>';
                            ?>
                        <?php } ?>
                    </ul>
                </div>
                <div style="horiz-align: center">
                    <button id="load_more">加载更多</button>
                </div>
                <div class="separator"></div>
            </div>

        </div>
    </div>
    <div id="likeContainer">
        <h1>你喜欢的图片</h1>
        <div id="likeSubjectPanel">
            <ul id="myLike">
                <li class="showImage"><img class="imgshow" src="../../../Uploads/showPic/sortable-1.jpg" alt="sortable 1" title="test"></li>
            </ul>
        </div>
    </div>
    <div>
        <p>
            <?php echo $pic_source[0]['path']?>
        </p>
    </div>
</div>
</body>
</html>

