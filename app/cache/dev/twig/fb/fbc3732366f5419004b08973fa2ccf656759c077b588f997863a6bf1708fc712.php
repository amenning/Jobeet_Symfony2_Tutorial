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
        $__internal_96f6646583cbfb5dea5d1999c6963e0075242f6b9091c0ac82ff4298cddb7d0b = $this->env->getExtension("native_profiler");
        $__internal_96f6646583cbfb5dea5d1999c6963e0075242f6b9091c0ac82ff4298cddb7d0b->enter($__internal_96f6646583cbfb5dea5d1999c6963e0075242f6b9091c0ac82ff4298cddb7d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f6646583cbfb5dea5d1999c6963e0075242f6b9091c0ac82ff4298cddb7d0b->leave($__internal_96f6646583cbfb5dea5d1999c6963e0075242f6b9091c0ac82ff4298cddb7d0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dba55b36c2dab9c22ad5d6fb9b5fd58393d2cc910267e14566a832ea5845a5ef = $this->env->getExtension("native_profiler");
        $__internal_dba55b36c2dab9c22ad5d6fb9b5fd58393d2cc910267e14566a832ea5845a5ef->enter($__internal_dba55b36c2dab9c22ad5d6fb9b5fd58393d2cc910267e14566a832ea5845a5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dba55b36c2dab9c22ad5d6fb9b5fd58393d2cc910267e14566a832ea5845a5ef->leave($__internal_dba55b36c2dab9c22ad5d6fb9b5fd58393d2cc910267e14566a832ea5845a5ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b01cf525230171f6857d555c96402a2713ce1599e2ab3dba7eb56b0e4cea691 = $this->env->getExtension("native_profiler");
        $__internal_7b01cf525230171f6857d555c96402a2713ce1599e2ab3dba7eb56b0e4cea691->enter($__internal_7b01cf525230171f6857d555c96402a2713ce1599e2ab3dba7eb56b0e4cea691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7b01cf525230171f6857d555c96402a2713ce1599e2ab3dba7eb56b0e4cea691->leave($__internal_7b01cf525230171f6857d555c96402a2713ce1599e2ab3dba7eb56b0e4cea691_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a29d458d549b2f8579ead35b4ff77179f0ec32e052c8b77f3e0d723d3dbc0be = $this->env->getExtension("native_profiler");
        $__internal_4a29d458d549b2f8579ead35b4ff77179f0ec32e052c8b77f3e0d723d3dbc0be->enter($__internal_4a29d458d549b2f8579ead35b4ff77179f0ec32e052c8b77f3e0d723d3dbc0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a29d458d549b2f8579ead35b4ff77179f0ec32e052c8b77f3e0d723d3dbc0be->leave($__internal_4a29d458d549b2f8579ead35b4ff77179f0ec32e052c8b77f3e0d723d3dbc0be_prof);

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
