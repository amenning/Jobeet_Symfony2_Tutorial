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
        $__internal_d49c17ab7eaece4241e7e31cafeb519adf41fdf85eaa13d3aa0259941a5fe2cf = $this->env->getExtension("native_profiler");
        $__internal_d49c17ab7eaece4241e7e31cafeb519adf41fdf85eaa13d3aa0259941a5fe2cf->enter($__internal_d49c17ab7eaece4241e7e31cafeb519adf41fdf85eaa13d3aa0259941a5fe2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49c17ab7eaece4241e7e31cafeb519adf41fdf85eaa13d3aa0259941a5fe2cf->leave($__internal_d49c17ab7eaece4241e7e31cafeb519adf41fdf85eaa13d3aa0259941a5fe2cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0f1c09989646683aca39450ef099d135ffe8cf96e947aed429e21e4f408df2a = $this->env->getExtension("native_profiler");
        $__internal_a0f1c09989646683aca39450ef099d135ffe8cf96e947aed429e21e4f408df2a->enter($__internal_a0f1c09989646683aca39450ef099d135ffe8cf96e947aed429e21e4f408df2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0f1c09989646683aca39450ef099d135ffe8cf96e947aed429e21e4f408df2a->leave($__internal_a0f1c09989646683aca39450ef099d135ffe8cf96e947aed429e21e4f408df2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09f83c183ba055e190dac88443385ea0d21c22405f95640c22eae2235b834283 = $this->env->getExtension("native_profiler");
        $__internal_09f83c183ba055e190dac88443385ea0d21c22405f95640c22eae2235b834283->enter($__internal_09f83c183ba055e190dac88443385ea0d21c22405f95640c22eae2235b834283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09f83c183ba055e190dac88443385ea0d21c22405f95640c22eae2235b834283->leave($__internal_09f83c183ba055e190dac88443385ea0d21c22405f95640c22eae2235b834283_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_572f9bcf51770a6d56afdf03e49dab655d5e1bd327c117a5e0e5ddc37cf31f38 = $this->env->getExtension("native_profiler");
        $__internal_572f9bcf51770a6d56afdf03e49dab655d5e1bd327c117a5e0e5ddc37cf31f38->enter($__internal_572f9bcf51770a6d56afdf03e49dab655d5e1bd327c117a5e0e5ddc37cf31f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_572f9bcf51770a6d56afdf03e49dab655d5e1bd327c117a5e0e5ddc37cf31f38->leave($__internal_572f9bcf51770a6d56afdf03e49dab655d5e1bd327c117a5e0e5ddc37cf31f38_prof);

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
