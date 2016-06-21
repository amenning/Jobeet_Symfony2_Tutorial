<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b8693eb806b3b66d5de21741ec3597634f91b97306671084859ad7e5d4751996 extends Twig_Template
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
        $__internal_3c2ecc207c42abf7ea965227a7424301e5c0daf48d689757705371f795bc7ded = $this->env->getExtension("native_profiler");
        $__internal_3c2ecc207c42abf7ea965227a7424301e5c0daf48d689757705371f795bc7ded->enter($__internal_3c2ecc207c42abf7ea965227a7424301e5c0daf48d689757705371f795bc7ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c2ecc207c42abf7ea965227a7424301e5c0daf48d689757705371f795bc7ded->leave($__internal_3c2ecc207c42abf7ea965227a7424301e5c0daf48d689757705371f795bc7ded_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a6bfc3cd58ec19ee51553365faf6b90ab3d6370b1ae5b61268c7e46c5b5e042 = $this->env->getExtension("native_profiler");
        $__internal_7a6bfc3cd58ec19ee51553365faf6b90ab3d6370b1ae5b61268c7e46c5b5e042->enter($__internal_7a6bfc3cd58ec19ee51553365faf6b90ab3d6370b1ae5b61268c7e46c5b5e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a6bfc3cd58ec19ee51553365faf6b90ab3d6370b1ae5b61268c7e46c5b5e042->leave($__internal_7a6bfc3cd58ec19ee51553365faf6b90ab3d6370b1ae5b61268c7e46c5b5e042_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8a68be158add648e7e09b505ffd6fc22ce337be2f44f7069f2b592361bb05af = $this->env->getExtension("native_profiler");
        $__internal_d8a68be158add648e7e09b505ffd6fc22ce337be2f44f7069f2b592361bb05af->enter($__internal_d8a68be158add648e7e09b505ffd6fc22ce337be2f44f7069f2b592361bb05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8a68be158add648e7e09b505ffd6fc22ce337be2f44f7069f2b592361bb05af->leave($__internal_d8a68be158add648e7e09b505ffd6fc22ce337be2f44f7069f2b592361bb05af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e524c90c4f9be655d91f01104b20ef8d3d0939497aafbb01c4bcdea79e21afa9 = $this->env->getExtension("native_profiler");
        $__internal_e524c90c4f9be655d91f01104b20ef8d3d0939497aafbb01c4bcdea79e21afa9->enter($__internal_e524c90c4f9be655d91f01104b20ef8d3d0939497aafbb01c4bcdea79e21afa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e524c90c4f9be655d91f01104b20ef8d3d0939497aafbb01c4bcdea79e21afa9->leave($__internal_e524c90c4f9be655d91f01104b20ef8d3d0939497aafbb01c4bcdea79e21afa9_prof);

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
