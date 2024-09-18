var debounce = function (func, wait, immediate) {
    var timeout;

    // Calling debounce returns a new anonymous function
    return function () {
        var context = this,
            args = arguments;
        var callNow = immediate && !timeout;
        clearTimeout(timeout);

        // Set the new timeout
        timeout = setTimeout(function () {
            timeout = null;
            if (!immediate) {
                func.apply(context, args);
            }
        }, wait);
        if (callNow) func.apply(context, args);
    };
};


; (function ($, elementor) {

$(window).on('elementor/frontend/init', function () {

    elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {

        $scope.hasClass('elementor-element-edit-mode') && $scope.addClass('bwdproeb-background-overlay-yes');

    });

});

}) (jQuery, window.elementorFrontend);
; (function ($, elementor) {
$(window).on('elementor/frontend/init', function () {
    var ModuleHandler = elementorModules.frontend.handlers.Base,
        BackgroundParallax;

    BackgroundParallax = ModuleHandler.extend({

        bindEvents: function () {
            this.run();
        },

        getDefaultSettings: function () {
            return {
                media: false,
                easing: 1,
                viewport: 1,
            };
        },

        onElementChange: debounce(function (prop) {
            if ((prop.indexOf('bwdproeb_section_parallax_') !== -1) || (prop.indexOf('bwdproeb_parallax_') !== -1)) {
                this.run();
            }
        }, 400),

        settings: function (key) {
            // return this.getElementSettings('bwdproeb_section_parallax_' + key);
            return this.getElementSettings(key);
        },

        run: function () {
            var options = this.getDefaultSettings(),
                element = this.findElement('.elementor-element').get(0);

            if (jQuery(this.$element).hasClass("elementor-element")) {
                element = this.$element.get(0);
            }

            if (this.settings('bwdproeb_section_parallax_x_value.size')) {
                options.bgx = this.settings('bwdproeb_section_parallax_x_value.size') || 0;
            }
            if (this.settings('bwdproeb_section_parallax_value.size')) {
                options.bgy = this.settings('bwdproeb_section_parallax_value.size') || 0;
            }


            if (this.settings('bwdproeb_parallax_bg_colors')) {
                if (this.settings('bwdproeb_parallax_bg_border_color_start') || this.settings('bwdproeb_parallax_bg_border_color_end')) {
                    options.borderColor = [this.settings('bwdproeb_parallax_bg_border_color_start') || 0, this.settings('bwdproeb_parallax_bg_border_color_end') || 0];
                }
            }
            if (this.settings('bwdproeb_parallax_bg_colors')) {
                if (this.settings('bwdproeb_parallax_bg_color_start') || this.settings('bwdproeb_parallax_bg_color_end')) {
                    options.backgroundColor = [this.settings('bwdproeb_parallax_bg_color_start') || 0, this.settings('bwdproeb_parallax_bg_color_end') || 0];
                }
            }

            if ((this.settings('bwdproeb_section_parallax_on')) && (this.settings('bwdproeb_section_parallax_on') === 'yes')) {
                if (
                    this.settings('bwdproeb_section_parallax_x_value') ||
                    this.settings('bwdproeb_section_parallax_value') ||
                    this.settings('bwdproeb_parallax_bg_colors')
                ) {
                    this.bgParallax = bdtUIkit.parallax(element, options);
                }
            }

        }
    });


    elementorFrontend.hooks.addAction('frontend/element_ready/section', function ($scope) {
        elementorFrontend.elementsHandler.addHandler(BackgroundParallax, {
            $element: $scope
        });
    });
    
    elementorFrontend.hooks.addAction('frontend/element_ready/container', function ($scope) {
        elementorFrontend.elementsHandler.addHandler(BackgroundParallax, {
            $element: $scope
        });
    });

});
})(jQuery, window.elementorFrontend);
