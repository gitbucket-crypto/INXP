function theFunction () {
    // return true or false, depending on whether you want to allow the `href` property to follow through or not
    if( isMobile.any() )// alert('Mobile');
    {
    	//  let target ='whatsapp://send?phone=${encodeURIComponent('+number+')}&text='+content2;

        window.open('whatsapp://send?phone=${encodeURIComponent(5511961727791)}','_blank');
    }
    if(! isMobile.any() ) //alert('noMobile');
    {
        window.open("https://web.whatsapp.com/send?phone=5511961727791",'_blank');
    }
}
var isMobile = {
 Android: function() {
return navigator.userAgent.match(/Android/i);
},
BlackBerry: function() {
return navigator.userAgent.match(/BlackBerry/i);
},
iOS: function() {
return navigator.userAgent.match(/iPhone|iPad|iPod/i);
},
Opera: function() {
return navigator.userAgent.match(/Opera Mini/i);
},
Windows: function() {
return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
},
any: function() {
return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
}
};
