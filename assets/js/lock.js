function onload()
{

       window.onload = function() {
         document.onkeydown = function(e) {
           var code = e.keyCode || e.which;
           if(e.ctrlKey && (code == 80 || code == 112 || code==83)) {
           e.preventDefault && e.preventDefault();
           return false;
         }
       }
     }
}
