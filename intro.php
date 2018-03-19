<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/intro/introjs.css" rel="stylesheet">
</head>
<body>
<script src="js/jQuery/jquery311.min.js"></script>
<script src="js/intro/intro.js"></script>

<div class="main_container">
    <div class="flexi_form_title">
        <h1 data-step="1" data-intro="This is flexible forms tour">Flexible Forms</h1>
        <a id="flexi_form_start" href="javascript:void(0);">Start Tour</a>
    </div>
</div>

<button data-step="2" data-intro="This is flexible forms tour">ddd</button>
<button data-step="3" data-intro="This is flexible forms tour">fnnn</button>

<div id="form_container">
    <form class="flexi_form" data-step="" data-intro="Flexible form default layout with multiple field types" style=""  data-position="bottom">
        <ul>
            <li data-step="" data-position="left" data-intro="Inline form validation">
                <div class="left">Text Field</div><input type="text" />
            </li>
            <li data-step="" data-intro="Customizable Form Layouts">
                <div class="left">Dropdown Field</div>
                <select>
                    <option>Option 1</option>
                    <option>Option 2</option>
                </select>
            </li>
            <li data-step="" data-intro="Guidence for filling forms">
                <div class="left">File Field</div>
                <input type="file" />
                <div class="right">Please Upload PDF Files</div>
            </li>
            <li data-step="" data-intro="Guidence for filling forms">
                <div class="left">Checkboxes</div>
                <input type="checkbox" /><input type="checkbox" />
            </li>
            <li>
                <div class="left">Dropdown Field</div>
                <select>
                    <option>Option 1</option>
                    <option>Option 2</option>
                </select>
            </li>
        </ul>
    </form>
</div>


<script>
    introJs().setOption("exitOnOverlayClick", false).start();
</script>

</body>
</html>