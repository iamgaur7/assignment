jQuery(document).ready(function () {
    // Show Annual section by default
    jQuery("#annualsection").show();
    jQuery("#monthlysection").hide();

    // Toggle logic
    jQuery(".toggle-switch").click(function () {
        jQuery(".toggle-switch").removeClass("active-switch");  // Remove active class from all
        jQuery(this).addClass("active-switch");  // Add active class to clicked switch

        // Toggle checkbox states
        jQuery(".toggle-switch input[type='checkbox']").prop("checked", false);
        jQuery(this).find("input[type='checkbox']").prop("checked", true);

        // Show/Hide sections based on clicked switch
        if (jQuery(this).hasClass("annual-switch")) {
            jQuery("#annualsection").show();
            jQuery("#monthlysection").hide();
        } else {
            jQuery("#annualsection").hide();
            jQuery("#monthlysection").show();
        }
    });
});