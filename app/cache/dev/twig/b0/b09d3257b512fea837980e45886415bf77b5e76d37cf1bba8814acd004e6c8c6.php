<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3618c47606675d3e0de7ea2fda71add6c59446e209c2d9019e76144e24ef6826 = $this->env->getExtension("native_profiler");
        $__internal_3618c47606675d3e0de7ea2fda71add6c59446e209c2d9019e76144e24ef6826->enter($__internal_3618c47606675d3e0de7ea2fda71add6c59446e209c2d9019e76144e24ef6826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3618c47606675d3e0de7ea2fda71add6c59446e209c2d9019e76144e24ef6826->leave($__internal_3618c47606675d3e0de7ea2fda71add6c59446e209c2d9019e76144e24ef6826_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfdf6f9eeeb22c832a0d63da768864d6a7b6c12ad3bf3c795b00a447b69cdb95 = $this->env->getExtension("native_profiler");
        $__internal_cfdf6f9eeeb22c832a0d63da768864d6a7b6c12ad3bf3c795b00a447b69cdb95->enter($__internal_cfdf6f9eeeb22c832a0d63da768864d6a7b6c12ad3bf3c795b00a447b69cdb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfdf6f9eeeb22c832a0d63da768864d6a7b6c12ad3bf3c795b00a447b69cdb95->leave($__internal_cfdf6f9eeeb22c832a0d63da768864d6a7b6c12ad3bf3c795b00a447b69cdb95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1e767e1eda960d2aa18caf46ccf191cf1272e16cd409b8db4ef9c0319de3fda = $this->env->getExtension("native_profiler");
        $__internal_d1e767e1eda960d2aa18caf46ccf191cf1272e16cd409b8db4ef9c0319de3fda->enter($__internal_d1e767e1eda960d2aa18caf46ccf191cf1272e16cd409b8db4ef9c0319de3fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1e767e1eda960d2aa18caf46ccf191cf1272e16cd409b8db4ef9c0319de3fda->leave($__internal_d1e767e1eda960d2aa18caf46ccf191cf1272e16cd409b8db4ef9c0319de3fda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e4b0185a5a0322b2f5d0b602a9dae85cbec53956a0b3a65cb61058a2a4378e9 = $this->env->getExtension("native_profiler");
        $__internal_1e4b0185a5a0322b2f5d0b602a9dae85cbec53956a0b3a65cb61058a2a4378e9->enter($__internal_1e4b0185a5a0322b2f5d0b602a9dae85cbec53956a0b3a65cb61058a2a4378e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e4b0185a5a0322b2f5d0b602a9dae85cbec53956a0b3a65cb61058a2a4378e9->leave($__internal_1e4b0185a5a0322b2f5d0b602a9dae85cbec53956a0b3a65cb61058a2a4378e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
