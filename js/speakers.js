jQuery(document).ready(function ($) {
    $('a[rel^="prettyPhoto"]').prettyPhoto({ deeplinking: false, social_tools: false });

    get_images_by_year("17");
    get_images_by_year("16");
    get_images_by_year("15");
    get_images_by_year("14");
    get_images_by_year("13");
    get_images_by_year("12");
    get_images_by_year("11");
});

function get_images_by_year(year) {
    var folder = "images/speakers/" + year + "/";

    $.ajax({
        url: folder,
        success: function (data) {
            // should be find("td > a") [server hack]
            $(data).find("li > a").each(function (element) {
                var filename = $(this).attr("href");
                if (filename.match(/\.(jpe?g|JPE?G|png|PNG|gif)$/)) {
                    var filepath = folder + filename,
                        id = "#" + year,
                        element_html = `<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="${filepath}" rel="prettyphoto[pp_gal_20${year}]">
                                                <img src="${filepath}?v=${random(100000000000)}" class="img-thumbnail"/>
                                            </a>
                                        </div>`;

                    // console.log(filepath);
                    $(id).append(element_html);
                }
            });
        }
    });
}

function random(min, max) {
    return (Math.random() * ((max ? max : min) - (max ? min : 0) + 1) + (max ? min : 0)) | 0;
}
