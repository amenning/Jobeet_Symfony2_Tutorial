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
        $__internal_edc7dfe9b975fddf7bdf0957bbdd86aba7b69afb7f0ab11006397426e9973e4b = $this->env->getExtension("native_profiler");
        $__internal_edc7dfe9b975fddf7bdf0957bbdd86aba7b69afb7f0ab11006397426e9973e4b->enter($__internal_edc7dfe9b975fddf7bdf0957bbdd86aba7b69afb7f0ab11006397426e9973e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edc7dfe9b975fddf7bdf0957bbdd86aba7b69afb7f0ab11006397426e9973e4b->leave($__internal_edc7dfe9b975fddf7bdf0957bbdd86aba7b69afb7f0ab11006397426e9973e4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_50df2ef3e6a249d7e111f1d546630ef41b28c80c812ba9b57ab4c9e866cfd354 = $this->env->getExtension("native_profiler");
        $__internal_50df2ef3e6a249d7e111f1d546630ef41b28c80c812ba9b57ab4c9e866cfd354->enter($__internal_50df2ef3e6a249d7e111f1d546630ef41b28c80c812ba9b57ab4c9e866cfd354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50df2ef3e6a249d7e111f1d546630ef41b28c80c812ba9b57ab4c9e866cfd354->leave($__internal_50df2ef3e6a249d7e111f1d546630ef41b28c80c812ba9b57ab4c9e866cfd354_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_701347a6a99a4865554f4d8bc8328290488837778532449db629d5cc5e37dafb = $this->env->getExtension("native_profiler");
        $__internal_701347a6a99a4865554f4d8bc8328290488837778532449db629d5cc5e37dafb->enter($__internal_701347a6a99a4865554f4d8bc8328290488837778532449db629d5cc5e37dafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_701347a6a99a4865554f4d8bc8328290488837778532449db629d5cc5e37dafb->leave($__internal_701347a6a99a4865554f4d8bc8328290488837778532449db629d5cc5e37dafb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d803464b68f672d47808538a427d069639236dc7af5cf5f7c851a6b3df234dd8 = $this->env->getExtension("native_profiler");
        $__internal_d803464b68f672d47808538a427d069639236dc7af5cf5f7c851a6b3df234dd8->enter($__internal_d803464b68f672d47808538a427d069639236dc7af5cf5f7c851a6b3df234dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d803464b68f672d47808538a427d069639236dc7af5cf5f7c851a6b3df234dd8->leave($__internal_d803464b68f672d47808538a427d069639236dc7af5cf5f7c851a6b3df234dd8_prof);

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
