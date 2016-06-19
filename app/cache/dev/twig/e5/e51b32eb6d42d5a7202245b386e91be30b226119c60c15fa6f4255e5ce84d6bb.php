<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_c90491f153f2a3a9dde869e9c20449b43202849d349f6363400e6d0edf7253d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aabdf65be5a9d6aeeb5fbc816e9581826bf9c23f5a1c0fb1afdc3004e3ef617 = $this->env->getExtension("native_profiler");
        $__internal_0aabdf65be5a9d6aeeb5fbc816e9581826bf9c23f5a1c0fb1afdc3004e3ef617->enter($__internal_0aabdf65be5a9d6aeeb5fbc816e9581826bf9c23f5a1c0fb1afdc3004e3ef617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_0aabdf65be5a9d6aeeb5fbc816e9581826bf9c23f5a1c0fb1afdc3004e3ef617->leave($__internal_0aabdf65be5a9d6aeeb5fbc816e9581826bf9c23f5a1c0fb1afdc3004e3ef617_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_a78e996830ffbe4f3f2b3c55bf73a1a427478c924e18f0f182bc90c78f66c641 = $this->env->getExtension("native_profiler");
        $__internal_a78e996830ffbe4f3f2b3c55bf73a1a427478c924e18f0f182bc90c78f66c641->enter($__internal_a78e996830ffbe4f3f2b3c55bf73a1a427478c924e18f0f182bc90c78f66c641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a78e996830ffbe4f3f2b3c55bf73a1a427478c924e18f0f182bc90c78f66c641->leave($__internal_a78e996830ffbe4f3f2b3c55bf73a1a427478c924e18f0f182bc90c78f66c641_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_color_selector_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% spaceless %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 var select2FormatColorSelect = function format(state) {*/
/*                     if (!state.id || state.disabled) {*/
/*                         return state.text;*/
/*                     }*/
/* */
/*                     return ' <i class="fa fa-square" style="color: '+ state.id +'"></i> ' + state.text;*/
/*                 };*/
/* */
/*                 $('#{{ id }}').select2({*/
/*                     formatResult:    select2FormatColorSelect,*/
/*                     formatSelection: select2FormatColorSelect,*/
/*                     width:           '100%',*/
/*                     escapeMarkup:    function(m) { return m; }*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_color_selector_widget %}*/
/* */
