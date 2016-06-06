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
        $__internal_33247c69bb4eeabb5e1a130851d244f5c4658faa3d559a776116ea0eca9d6fad = $this->env->getExtension("native_profiler");
        $__internal_33247c69bb4eeabb5e1a130851d244f5c4658faa3d559a776116ea0eca9d6fad->enter($__internal_33247c69bb4eeabb5e1a130851d244f5c4658faa3d559a776116ea0eca9d6fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33247c69bb4eeabb5e1a130851d244f5c4658faa3d559a776116ea0eca9d6fad->leave($__internal_33247c69bb4eeabb5e1a130851d244f5c4658faa3d559a776116ea0eca9d6fad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7105e111154c56bcb1811db1d01444a659c6a0e317f3a9de6318a7ea3b917ef0 = $this->env->getExtension("native_profiler");
        $__internal_7105e111154c56bcb1811db1d01444a659c6a0e317f3a9de6318a7ea3b917ef0->enter($__internal_7105e111154c56bcb1811db1d01444a659c6a0e317f3a9de6318a7ea3b917ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7105e111154c56bcb1811db1d01444a659c6a0e317f3a9de6318a7ea3b917ef0->leave($__internal_7105e111154c56bcb1811db1d01444a659c6a0e317f3a9de6318a7ea3b917ef0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d78b01c62d5bd20a97e4e9679bbf9f6b6dc0a4504eaf877466d9fbc16811c1b = $this->env->getExtension("native_profiler");
        $__internal_3d78b01c62d5bd20a97e4e9679bbf9f6b6dc0a4504eaf877466d9fbc16811c1b->enter($__internal_3d78b01c62d5bd20a97e4e9679bbf9f6b6dc0a4504eaf877466d9fbc16811c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d78b01c62d5bd20a97e4e9679bbf9f6b6dc0a4504eaf877466d9fbc16811c1b->leave($__internal_3d78b01c62d5bd20a97e4e9679bbf9f6b6dc0a4504eaf877466d9fbc16811c1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfc41296a721e69661788ce20036534cdc2a55faa91a663b44478c3687c64e51 = $this->env->getExtension("native_profiler");
        $__internal_cfc41296a721e69661788ce20036534cdc2a55faa91a663b44478c3687c64e51->enter($__internal_cfc41296a721e69661788ce20036534cdc2a55faa91a663b44478c3687c64e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfc41296a721e69661788ce20036534cdc2a55faa91a663b44478c3687c64e51->leave($__internal_cfc41296a721e69661788ce20036534cdc2a55faa91a663b44478c3687c64e51_prof);

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
