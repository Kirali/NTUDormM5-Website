        function test(){
                 dataVar = { user : "John2", password : "jkkkkkkkkk"};
                 $.ajax({
                        type:"POST",
                        url: "http://localhost/web/dev/ntudormm5/index.php/welcome/ajaxTest",
                        data: dataVar,
                        async: false,
                        success: function(r){ 
                                alert(r);
                        }
                 });
        }
        $(function(){
                var variable = $('.footer');

                variable.on('click',test);
        });

