;(function($) {
    'use strict';
    $(window).on( 'elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction(
            'frontend/element_ready/widget-mentor.default',
            function($scope) {
                var el = $scope.find('.language-php')[0]
                Prism.highlightElement(el);
            }
        );
    });
}(jQuery));
