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
        $__internal_98c47c8293811d42652263ac2f2271f8756508a5e13ac1592f30e29512312982 = $this->env->getExtension("native_profiler");
        $__internal_98c47c8293811d42652263ac2f2271f8756508a5e13ac1592f30e29512312982->enter($__internal_98c47c8293811d42652263ac2f2271f8756508a5e13ac1592f30e29512312982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c47c8293811d42652263ac2f2271f8756508a5e13ac1592f30e29512312982->leave($__internal_98c47c8293811d42652263ac2f2271f8756508a5e13ac1592f30e29512312982_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2de34846ea78eb6eac15e04fc9cbdade7f7e319101134ab40a428dde1524140e = $this->env->getExtension("native_profiler");
        $__internal_2de34846ea78eb6eac15e04fc9cbdade7f7e319101134ab40a428dde1524140e->enter($__internal_2de34846ea78eb6eac15e04fc9cbdade7f7e319101134ab40a428dde1524140e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2de34846ea78eb6eac15e04fc9cbdade7f7e319101134ab40a428dde1524140e->leave($__internal_2de34846ea78eb6eac15e04fc9cbdade7f7e319101134ab40a428dde1524140e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_021b0b408edfe38ef7d1262ecbbfeb5e5a4d37f43500549224ef0023bd884e6e = $this->env->getExtension("native_profiler");
        $__internal_021b0b408edfe38ef7d1262ecbbfeb5e5a4d37f43500549224ef0023bd884e6e->enter($__internal_021b0b408edfe38ef7d1262ecbbfeb5e5a4d37f43500549224ef0023bd884e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_021b0b408edfe38ef7d1262ecbbfeb5e5a4d37f43500549224ef0023bd884e6e->leave($__internal_021b0b408edfe38ef7d1262ecbbfeb5e5a4d37f43500549224ef0023bd884e6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01b60209154ab33a83b79f55a6b9cfa709efc60f7f9e8b7e113c6aaef424004b = $this->env->getExtension("native_profiler");
        $__internal_01b60209154ab33a83b79f55a6b9cfa709efc60f7f9e8b7e113c6aaef424004b->enter($__internal_01b60209154ab33a83b79f55a6b9cfa709efc60f7f9e8b7e113c6aaef424004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01b60209154ab33a83b79f55a6b9cfa709efc60f7f9e8b7e113c6aaef424004b->leave($__internal_01b60209154ab33a83b79f55a6b9cfa709efc60f7f9e8b7e113c6aaef424004b_prof);

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
