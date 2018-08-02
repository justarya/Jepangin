// function processAjaxData(response, urlPath){
//     document.getElementsByClassName("content")[0].innerHTML = response.html;
//     document.title = response.pageTitle;
//     window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
// }
// window.onpopstate = function(e){
//     if(e.state){
//         document.getElementById("content").innerHTML = e.state.html;
//         document.title = e.state.pageTitle;
//     }
// };

function popupToggle(){
  $('.popup-background').toggle();
}
function popup(){
  $('.popup-background').toggle();
}
$(document).ready(function(){
});
