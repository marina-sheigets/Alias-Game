
    $(document)
    .ready(function () {
        var variant = $('#uzz')
            .clone(true);
        $('#ss')
            .click(function () {
                $(variant)
                    .clone(true)
                    .appendTo('#variants')
                    .fadeIn('slow')
                    .find("input[name*=name]")
                    .focus();
            });
        $(document)
           .on('click', 'a.del_variant', function () {
                $(this)
                    .parents(".control-group")
                    .remove();
            });
   });



   function count()
   {
       //margin();
       //alert(document.getElementById('variants').getElementsByTagName('input').length);
       if(document.getElementById('variants').getElementsByTagName('input').length>1)
       {
           
           document.getElementById('ss').style.display = 'none';

       }
       else{
           //document.getElementById('ss').style.margin-top = '20px';
       }
       
       
   }

   function margin(){
       //document.getElementById('ss').style.margin-top = '20px';
   }

   function showButton()
   {

       document.getElementById('ss').style.display = 'inline';
       
   }