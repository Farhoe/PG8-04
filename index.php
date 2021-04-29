<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kolečko</title>
    <style>
        .div--default {     
            width: 300px;
            transition: height 1s, width 1s, border-radius 1s;
            height: 300px;
            border-radius: 150px;
            background-color: grey;
        }

        .div--actived {
            width: 150px;
            height: 150px;
            border-radius: 150px;
            background-color: green;
        }
    </style>
</head>
<body>
    <script>
    function activate() {
        var div = event.srcElement;
        if(div.classList.contains('div--actived')) {
                div.classList.remove('div--actived');
            } else {
                div.classList.add('div--actived');
            }
        }
    }
    </script>
</body>
</html>