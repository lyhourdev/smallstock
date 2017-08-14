<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice Print :: POS</title>
    <script>
        function printContent(el) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
</head>

<body>
<div id="div1"> DIV 1</div>
<button onclick="printContent('div1')"> Print Content</button>
<div id="div2">Div 2</div>
<button onclick="printContent('div2')"> Print Content</button>
<p id="p1">Paragrash 1</p>
<button onclick="printContent('p1')"> Print Content</button>


</body>
</html>
