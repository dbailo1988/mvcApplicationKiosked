<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript">
        function getArticle ()
        {
            var author = $('#form select').val();
            alert(author);
            $.ajax({
                url: 'http://localhost/mvcKiosked/index.php?news&getArticle&author=' + author,
                success: populateArticle,
                dataType: 'json'
           });
        }

        function populateArticle(article)
        {
            $('#title').html(article.title);
            $('#content').html(article.content);
        }


        $(document).ready(function() {
            // Handler for .ready() called.
            $('#form').submit(function(){
                getArticle();
                return false;
            });
        });

    </script>



</head>
<body>
<h1>Welcome to Our Website!</h1>
<hr/>
<h2>News</h2>
<form id='form' name="input" method="get">
    <select>
        <option value="John Squibb">John Squibb</option>
        <option value="Frank Rabbit">Frank Rabbit</option>
    </select>
    <input type="submit" value="Submit">
</form>
<div id="result">
<h4 id="title"></h4>
<p id="content"></p>
</div>
</body>
</html>