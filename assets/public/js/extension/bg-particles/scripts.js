var debounce = function (func, wait, immediate) {
    var timeout;
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
;(function ($, elementor) {
    'use strict';
    $(window).on('elementor/frontend/init', function () {
        var ModuleHandler = elementorModules.frontend.handlers.Base,
            Particles;

        Particles = ModuleHandler.extend({

            bindEvents: function () {
                this.run();
            },

            getDefaultSettings: function () {
                return {
                    allowHTML: true,
                };
            },

            onElementChange: debounce(function (prop) {
                if (prop.indexOf('bwdproeb_section_particles') !== -1) {
                    // window.pJSDom[0].pJS.fn.vendors.destroypJS();
                    this.run();
                }
            }, 400),

            settings: function (key) {
                return this.getElementSettings('bwdproeb_section_particles_' + key);
            },

            run: function () {
                var particleID = 'bwdproeb-particle-container-' + this.$element.data('id'),
                    widgetID = this.$element.data('id'),
                    widgetContainer = $('.elementor-element-' + widgetID);
                this.particleID = particleID;

                // start predefined json data
                var jsonData = {
                    'particles': {
                        'number': {
                            'value': 80,
                            'density': {
                                'enable': true,
                                'value_area': 800
                            }
                        },
                        'color': {
                            'value': '#ffffff'
                        },
                        'shape': {
                            'type': 'circle',
                            'stroke': {
                                'width': 0,
                                'color': '#000000'
                            },
                            'polygon': {
                                'nb_sides': 5
                            },
                            'image': {
                                'src': '',
                                'width': 100,
                                'height': 100
                            }
                        },
                        'opacity': {
                            'value': 0.5,
                            'random': false,
                            'anim': {
                                'enable': false,
                                'speed': 1,
                                'opacity_min': 0.1,
                                'sync': false
                            }
                        },
                        'size': {
                            'value': 3,
                            'random': true,
                            'anim': {
                                'enable': false,
                                'speed': 40,
                                'size_min': 0.1,
                                'sync': false
                            }
                        },
                        'line_linked': {
                            'enable': true,
                            'distance': 150,
                            'color': '#ffffff',
                            'opacity': 0.4,
                            'width': 1
                        },
                        'move': {
                            'enable': true,
                            'speed': 6,
                            'direction': 'none',
                            'random': false,
                            'straight': false,
                            'out_mode': 'out',
                            'bounce': false,
                            'attract': {
                                'enable': false,
                                'rotateX': 600,
                                'rotateY': 1200
                            }
                        }
                    },
                    'interactivity': {
                        'detect_on': 'canvas',
                        'events': {
                            'onhover': {
                                'enable': false,
                                'mode': 'repulse'
                            },
                            'onclick': {
                                'enable': true,
                                'mode': 'push'
                            },
                            'resize': true
                        },
                        'modes': {
                            'grab': {
                                'distance': 400,
                                'line_linked': {
                                    'opacity': 1
                                }
                            },
                            'bubble': {
                                'distance': 400,
                                'size': 40,
                                'duration': 2,
                                'opacity': 8,
                                'speed': 3
                            },
                            'repulse': {
                                'distance': 200,
                                'duration': 0.4
                            },
                            'push': {
                                'particles_nb': 4
                            },
                            'remove': {
                                'particles_nb': 2
                            }
                        }
                    },
                    'retina_detect': true
                };
                // end of predefine json data


                if (this.settings('js') && this.settings('js').length !== 0) {
                    jsonData = JSON.parse(this.settings('js'));
                }

                if (this.settings('on')) {
                    if ($('#' + particleID).length === 0) {
                        $(widgetContainer).prepend('<div id="' + particleID + '" class="bwdproeb-particle-container"></div>');
                    }

                    particlesJS(particleID, jsonData);

                }
            }
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/section', function ($scope) {
            elementorFrontend.elementsHandler.addHandler(Particles, {
                $element: $scope
            });
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/container', function ($scope) {
            elementorFrontend.elementsHandler.addHandler(Particles, {
                $element: $scope
            });
        });

    });

}(jQuery, window.elementorFrontend));