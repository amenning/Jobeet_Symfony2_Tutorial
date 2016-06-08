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
        $__internal_482cd7db9dac5d3c811d8a6ebf353a8e00f9f724e95bf8db5e57b406e20586f6 = $this->env->getExtension("native_profiler");
        $__internal_482cd7db9dac5d3c811d8a6ebf353a8e00f9f724e95bf8db5e57b406e20586f6->enter($__internal_482cd7db9dac5d3c811d8a6ebf353a8e00f9f724e95bf8db5e57b406e20586f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482cd7db9dac5d3c811d8a6ebf353a8e00f9f724e95bf8db5e57b406e20586f6->leave($__internal_482cd7db9dac5d3c811d8a6ebf353a8e00f9f724e95bf8db5e57b406e20586f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f6d8b366e70d1de9ce66f7511d702ab37982b80fc361db93ca3c770ce13650a4 = $this->env->getExtension("native_profiler");
        $__internal_f6d8b366e70d1de9ce66f7511d702ab37982b80fc361db93ca3c770ce13650a4->enter($__internal_f6d8b366e70d1de9ce66f7511d702ab37982b80fc361db93ca3c770ce13650a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f6d8b366e70d1de9ce66f7511d702ab37982b80fc361db93ca3c770ce13650a4->leave($__internal_f6d8b366e70d1de9ce66f7511d702ab37982b80fc361db93ca3c770ce13650a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e97c0185c46b900ce07a7f96f1d4fcc109aceb5df0d297f2314d4802b5f59726 = $this->env->getExtension("native_profiler");
        $__internal_e97c0185c46b900ce07a7f96f1d4fcc109aceb5df0d297f2314d4802b5f59726->enter($__internal_e97c0185c46b900ce07a7f96f1d4fcc109aceb5df0d297f2314d4802b5f59726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e97c0185c46b900ce07a7f96f1d4fcc109aceb5df0d297f2314d4802b5f59726->leave($__internal_e97c0185c46b900ce07a7f96f1d4fcc109aceb5df0d297f2314d4802b5f59726_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32d96859a8fcea698779e4577a99144049542fbc560b55b50197c2db5a648486 = $this->env->getExtension("native_profiler");
        $__internal_32d96859a8fcea698779e4577a99144049542fbc560b55b50197c2db5a648486->enter($__internal_32d96859a8fcea698779e4577a99144049542fbc560b55b50197c2db5a648486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32d96859a8fcea698779e4577a99144049542fbc560b55b50197c2db5a648486->leave($__internal_32d96859a8fcea698779e4577a99144049542fbc560b55b50197c2db5a648486_prof);

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
