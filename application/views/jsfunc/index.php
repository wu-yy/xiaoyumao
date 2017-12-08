<!DOCTYPE html>
<html>
<head>
    <title>jsfunc</title>
    <script type="text/javascript" src="../../statics/js/jquery-3.2.1.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $(function() {
            $("<p>Hi there!</p>").insertAfter("#followMe");
        });
    </script>
</head>
<body>

<p>这是js测试文件</p>
<p id="followMe">Follow me!</p>

<button type="button" onclick="document.getElementById('followMe').style.color='red';"></button>
</body>
</html>
