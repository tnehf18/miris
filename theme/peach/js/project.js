// content.skin.php 프로젝트 id 및 페이지 부여
$(document).on("ready", function() {
    
    $(".table_list").before('<div id="table_page"><ul id="page_btns"></ul></div>');
    var divList = $(".table_list").children("div");
    for(var i=0;i<divList.length;i++){
        // id 부여
        var title = $(divList[i]).find('h2').text();
        $(divList[i]).attr("id", "t_" + title);

        // page btn
        var pageBtn = '<li><div class="button-4"><div class="eff-4"></div><a href="#t_' + title + '">' + title + '</a></div></li>';
        $('ul#page_btns').append(pageBtn);
    }

})