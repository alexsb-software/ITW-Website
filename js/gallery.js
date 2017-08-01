jQuery(document).ready(function ($) {
    $('a[rel^="prettyPhoto"]').prettyPhoto({ deeplinking: false, social_tools: false });
    //Isotop
    $(window).load(function () {
        $('.galleryImages').show().css('visibility', 'hidden');//load problem fix
        $('.loadGallery').hide();
        var $container = $('.galleryImages');
        $container.isotope({
            filter: '.2016',
            itemSelector: '.item',
            masonry: {
                columnWidth: 0,
                //cornerStampSelector: '.corner-stamp'
            }
        });
        $('.galleryImages').css('visibility', 'visible');//load problem fix
        var $optionSets = $('.option-set'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function () {
            var $this = $(this);
            // don't proceed if already selected
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[key] = value;
            if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                // changes in layout modes need extra logic
                changeLayoutMode($this, options)
            } else {
                // otherwise, apply new options
                $container.isotope(options);
            }

            return false;
        });
    });

    $('.galleryImages').hide();

    get_images_by_year("16");
    // get_images_by_year("15");
    get_images_by_year("14");
    get_images_by_year("13");
    get_images_by_year("12");
    get_images_by_year("11");
    get_images_by_year("10");
    get_images_by_year("09");
    get_images_by_year("08");
});

function get_images_by_year(year) {
    var folder = "images/gallery/" + year + "/";

    $.ajax({
        url: folder,
        success: function (data) {
            // should be find("td > a") [server hack]
            $(data).find("li > a").each(function (element) {
                var filename = $(this).attr("href");
                if (filename.match(/\.(jpe?g|JPE?G|png|PNG|gif)$/)) {
                    var filepath = folder + filename,
                        id = "#" + year,
                        element_html = `<li class="item 20${year}">
                                    <div>
                                        <img src="${filepath}" width="630" height="200" alt="" title="" />
                                        <div class="galleryHover">
                                            <a href="${filepath}" rel="prettyphoto[pp_gal_20${year}]"></a>
                                        </div>
                                    </div>
                                </li>`;

                    $(id).append(element_html);
                }
            });
        }
    });
}
