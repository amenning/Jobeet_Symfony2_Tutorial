<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26ee7c975eb90086b2d3efaf3494f2022ae1ca73f883b082cd1b132b2be2a412 = $this->env->getExtension("native_profiler");
        $__internal_26ee7c975eb90086b2d3efaf3494f2022ae1ca73f883b082cd1b132b2be2a412->enter($__internal_26ee7c975eb90086b2d3efaf3494f2022ae1ca73f883b082cd1b132b2be2a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26ee7c975eb90086b2d3efaf3494f2022ae1ca73f883b082cd1b132b2be2a412->leave($__internal_26ee7c975eb90086b2d3efaf3494f2022ae1ca73f883b082cd1b132b2be2a412_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6179bed960a37521e7295ce9ae8eb337ac7e38386571150ec3cf6312424af02d = $this->env->getExtension("native_profiler");
        $__internal_6179bed960a37521e7295ce9ae8eb337ac7e38386571150ec3cf6312424af02d->enter($__internal_6179bed960a37521e7295ce9ae8eb337ac7e38386571150ec3cf6312424af02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6179bed960a37521e7295ce9ae8eb337ac7e38386571150ec3cf6312424af02d->leave($__internal_6179bed960a37521e7295ce9ae8eb337ac7e38386571150ec3cf6312424af02d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8cfaec745cd1975f3d88cfb923e54fecef7c726666d8da846acaddddabd03ce = $this->env->getExtension("native_profiler");
        $__internal_d8cfaec745cd1975f3d88cfb923e54fecef7c726666d8da846acaddddabd03ce->enter($__internal_d8cfaec745cd1975f3d88cfb923e54fecef7c726666d8da846acaddddabd03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8cfaec745cd1975f3d88cfb923e54fecef7c726666d8da846acaddddabd03ce->leave($__internal_d8cfaec745cd1975f3d88cfb923e54fecef7c726666d8da846acaddddabd03ce_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_791ad285e2d5299bf22c2cb9ecae6ecc136b1185b10b00618426026b5d4edbea = $this->env->getExtension("native_profiler");
        $__internal_791ad285e2d5299bf22c2cb9ecae6ecc136b1185b10b00618426026b5d4edbea->enter($__internal_791ad285e2d5299bf22c2cb9ecae6ecc136b1185b10b00618426026b5d4edbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_791ad285e2d5299bf22c2cb9ecae6ecc136b1185b10b00618426026b5d4edbea->leave($__internal_791ad285e2d5299bf22c2cb9ecae6ecc136b1185b10b00618426026b5d4edbea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
