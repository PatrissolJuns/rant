<script src="../js/jquery-3.3.1.min.js"></script>
<div class="alert alert-primary"><h1>Bonjour</h1></div>

<div id="divPagination"><h2>ceci est dans le div </h2>
              
              @include('restaurant/restaurantSearchInside')
            
</div>


<script type="text/javascript">
            $(document).ready(function(){
                $(function(){
                    $('body').on('click', '.pagination a', function(e){
                        e.preventDefault();
                        
                        //$('.divPagination').hide(1000);

                        var url = $(this).attr('href');
                        var page = $(this).attr('href').split('page=')[1];
                        getArticle(page);
                        window.history.pushState("", "", url);
                    });
                
                    function getArticle(page){
                        $.ajax({
                            url: "/restaurantSearchInside?page="+page
                        }).done(function (data){
                            //alert("nous somme dans le done!");
                            $('#divPagination').html(data);
                            //console.log(data);
                        }).fail(function (){
                            alert('Articles could not be loaded');
                        });
                    }
                });
            });
          </script>

          