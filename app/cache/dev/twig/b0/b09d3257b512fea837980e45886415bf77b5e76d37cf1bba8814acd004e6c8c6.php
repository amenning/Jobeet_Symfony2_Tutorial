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
        $__internal_5809b6355e634942c287503272717734610a3fe9b9ff6dbc1717a99fa84f6edf = $this->env->getExtension("native_profiler");
        $__internal_5809b6355e634942c287503272717734610a3fe9b9ff6dbc1717a99fa84f6edf->enter($__internal_5809b6355e634942c287503272717734610a3fe9b9ff6dbc1717a99fa84f6edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5809b6355e634942c287503272717734610a3fe9b9ff6dbc1717a99fa84f6edf->leave($__internal_5809b6355e634942c287503272717734610a3fe9b9ff6dbc1717a99fa84f6edf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_899afa760ccf04fc74a1bd4c3348bb5d8d33d3d56f52973257dc3720b688dddf = $this->env->getExtension("native_profiler");
        $__internal_899afa760ccf04fc74a1bd4c3348bb5d8d33d3d56f52973257dc3720b688dddf->enter($__internal_899afa760ccf04fc74a1bd4c3348bb5d8d33d3d56f52973257dc3720b688dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_899afa760ccf04fc74a1bd4c3348bb5d8d33d3d56f52973257dc3720b688dddf->leave($__internal_899afa760ccf04fc74a1bd4c3348bb5d8d33d3d56f52973257dc3720b688dddf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8512bad621a241a1fa8b89425ab70ed256c66bb1b2c68d1139b824bbbbbe9388 = $this->env->getExtension("native_profiler");
        $__internal_8512bad621a241a1fa8b89425ab70ed256c66bb1b2c68d1139b824bbbbbe9388->enter($__internal_8512bad621a241a1fa8b89425ab70ed256c66bb1b2c68d1139b824bbbbbe9388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8512bad621a241a1fa8b89425ab70ed256c66bb1b2c68d1139b824bbbbbe9388->leave($__internal_8512bad621a241a1fa8b89425ab70ed256c66bb1b2c68d1139b824bbbbbe9388_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4cc70011f05631aca56d79277b1ecf5b59e0cd3debeff2cab424b8bc6c57be4 = $this->env->getExtension("native_profiler");
        $__internal_c4cc70011f05631aca56d79277b1ecf5b59e0cd3debeff2cab424b8bc6c57be4->enter($__internal_c4cc70011f05631aca56d79277b1ecf5b59e0cd3debeff2cab424b8bc6c57be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4cc70011f05631aca56d79277b1ecf5b59e0cd3debeff2cab424b8bc6c57be4->leave($__internal_c4cc70011f05631aca56d79277b1ecf5b59e0cd3debeff2cab424b8bc6c57be4_prof);

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
