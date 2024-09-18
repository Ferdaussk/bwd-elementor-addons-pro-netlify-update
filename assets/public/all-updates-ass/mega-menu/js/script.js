"use strict";
(function ($, w) {
  var $window = $(w);
  $window.on("elementor/frontend/init", function () {
    //SmartPostList

    var MegaMenuMaster = function MegaMenuMaster($scope) {
      $scope.find(".mmm-menu-toggler").on("click", function (event) {
        event.preventDefault();
        var $wrapElement = $scope.find(".mmm-navbar");
        if ($wrapElement.hasClass("active")) {
          $wrapElement.removeClass("active");
        } else {
          $wrapElement.addClass("active");
        }
      });

      var sidebar_mousemove = $scope.find(".mmm-megamenu-has");
      sidebar_mousemove.on("mouseenter", function () {
        if ($(this).hasClass("full-width")) {
          var ffleft = Math.floor(
            $(this).position().left - $(this).offset().left
          );

          var $sharepreview = $(this);
          $sharepreview.find(".mmm-sub-menu").css("width", $(window).width());
          $(window)
            .on("resize", function () {
              $sharepreview.find(".mmm-sub-menu").css({ left: ffleft + "px" });
            })
            .trigger("resize");
        }
      });
      sidebar_mousemove.trigger("mouseenter");

      $scope
        .find(".mmm-megamenu-has > a, .mmm-sub-menu a")
        .on("click", function (event) {
          event.preventDefault();
          var $submenu = $(this).siblings(".mmm-sub-menu, .sub-menu");
          $submenu.toggleClass("mmm-dropdown-open");
        });

      $scope.find(".mmm-megamenu-has .mmm-sub-menu").each(function () {
        var $mmmSubMenu = $(this);
        var $mmmParentMenuItem = $mmmSubMenu.find("li.menu-item");
        var $mainSubMenu = $mmmParentMenuItem.find(".sub-menu");
        $mainSubMenu
          .parent()
          .find("> a")
          .append(
            '<span class="drop-icon"><i class="fas fa-chevron-down"></i></span>'
          );
      });
    };

    elementorFrontend.hooks.addAction(
      "frontend/element_ready/MegaMenuMaster.default",
      MegaMenuMaster
    );
  });
})(jQuery, window);
