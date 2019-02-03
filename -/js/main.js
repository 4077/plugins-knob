// head {
var __nodeId__ = "plugins_knob__main";
var __nodeNs__ = "plugins_knob";
// }

(function (__nodeNs__, __nodeId__) {
    $.widget(__nodeNs__ + "." + __nodeId__, $.ewma.node, {
        options: {},

        __create: function () {
            var w = this;
            var o = w.options;
            var $w = w.element;

            var $input = $("input", $w);

            var pluginOptions = o.pluginOptions;

            $.extend(pluginOptions, {
                release: function (value) {
                    w.r('update', {
                        value: value
                    });
                }
            });

            $input.knob(pluginOptions);
        }
    });
})(__nodeNs__, __nodeId__);
