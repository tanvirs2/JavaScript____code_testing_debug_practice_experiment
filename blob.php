<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jQuery/jquery311.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
</head>
<body>

<form action="blob2.php" id="myForm" method="post" enctype="multipart/form-data">
    <input type="file" id="photo" name="file">
    <input type="text" name="name">
    <input type="text" name="name2">
    <button type="submit">sv</button>
</form>
<img src="" id="img" alt="">


<pre>
<?php

//print_r($_POST);
//print_r($_FILES);

?>
    </pre>

<script>
    $('#myForm').submit(function (e) {
        e.preventDefault();
        var photo = document.getElementById("photo");

        var fileR = new FileReader(photo);

        console.log(fileR);

        var file = photo.files[0];

        //console.log(file);

        //console.log("File name: " + file.fileName);
        //console.log("File size: " + file.fileSize);
        //console.log("Binary content: " + file.getAsBinary());
        //console.log("Text content: " + file.getAsText(""));

        //var preview = document.getElementById("preview");
        //preview.src = file.getAsDataURL();
        //file.getAsDataURL();

        return false;
    });



    var imgData;
    document.onpaste = function(event){
        var items = (event.clipboardData || event.originalEvent.clipboardData).items;
        //console.log(JSON.stringify(items)); // will give you the mime types
        var file = items[0].getAsFile();
        //console.log(file);
        for (index in items) {
            var item = items[index];
            if (item.kind === 'file') {
                var blob = item.getAsFile();
                var reader = new FileReader();
                reader.onload = function(event){
                    //console.log(event.target.result);
                    imgData = event.target.result;
                    var img = document.getElementById('img');
                    //img.src = imgData;
                    //img.src = file.name;

                }; // data url!
                reader.readAsDataURL(blob);
            }
        }
    }


    $(document).ready(function () {

        $('#myForm1').submit(function (e) {
            e.preventDefault();

            //console.log(imgData);

            var myForm = document.getElementById('myForm');
            var formData = new FormData(myForm);
            formData.append('name3', 'hello');
            formData.set('name', 'juwel');
            //formData.append('file', imgData, 'juwel.png');
            var blob = new Blob([imgData], { type: "image/png"});

            formData.append("webmasterfile", blob, 'jjj.jpg');

            $.ajax({
                type: 'POST',
                url: 'blob2.php',
                data: formData,
                success: function (data) {
                    alert(data);
                },
                processData: false,
                contentType: false
            });
        });


        /*$('#myForm').ajaxForm({
            //data: { 'dsad': 'value1', 'dads': 'value2' },
            success: function (data) {
                alert(data);
            }
        });*/
    });







    $(document).ready(function () {

        //data.delete('ff');

        /*$('#gg').on('change', function(event) {

            $('#img').attr('src', (window.URL || window.webkitURL).createObjectURL(this.files[0]));
            //data.append('file', (window.URL || window.webkitURL).createObjectURL(this.files[0]));
        });*/
    });

</script>
</body>
</html>