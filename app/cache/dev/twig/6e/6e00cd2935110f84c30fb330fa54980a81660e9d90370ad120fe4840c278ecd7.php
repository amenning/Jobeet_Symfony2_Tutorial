<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
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
        $__internal_3f92b9cbfaff0defe7179679e820b9a0d98764785ec3af266466e1246c8c2d8e = $this->env->getExtension("native_profiler");
        $__internal_3f92b9cbfaff0defe7179679e820b9a0d98764785ec3af266466e1246c8c2d8e->enter($__internal_3f92b9cbfaff0defe7179679e820b9a0d98764785ec3af266466e1246c8c2d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f92b9cbfaff0defe7179679e820b9a0d98764785ec3af266466e1246c8c2d8e->leave($__internal_3f92b9cbfaff0defe7179679e820b9a0d98764785ec3af266466e1246c8c2d8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acb39084332591208fa97c735070cc0bf78098ffb33997b7eeaa84328d015d87 = $this->env->getExtension("native_profiler");
        $__internal_acb39084332591208fa97c735070cc0bf78098ffb33997b7eeaa84328d015d87->enter($__internal_acb39084332591208fa97c735070cc0bf78098ffb33997b7eeaa84328d015d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_acb39084332591208fa97c735070cc0bf78098ffb33997b7eeaa84328d015d87->leave($__internal_acb39084332591208fa97c735070cc0bf78098ffb33997b7eeaa84328d015d87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13be6672f93c42021f4e07d582fd615ed3d0e26cecb1ed8a471a5e13c427b900 = $this->env->getExtension("native_profiler");
        $__internal_13be6672f93c42021f4e07d582fd615ed3d0e26cecb1ed8a471a5e13c427b900->enter($__internal_13be6672f93c42021f4e07d582fd615ed3d0e26cecb1ed8a471a5e13c427b900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13be6672f93c42021f4e07d582fd615ed3d0e26cecb1ed8a471a5e13c427b900->leave($__internal_13be6672f93c42021f4e07d582fd615ed3d0e26cecb1ed8a471a5e13c427b900_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35fa75b951edb3e8d086b387bf77b03e6addd2227c154e8b8cb17c7958316dc4 = $this->env->getExtension("native_profiler");
        $__internal_35fa75b951edb3e8d086b387bf77b03e6addd2227c154e8b8cb17c7958316dc4->enter($__internal_35fa75b951edb3e8d086b387bf77b03e6addd2227c154e8b8cb17c7958316dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35fa75b951edb3e8d086b387bf77b03e6addd2227c154e8b8cb17c7958316dc4->leave($__internal_35fa75b951edb3e8d086b387bf77b03e6addd2227c154e8b8cb17c7958316dc4_prof);

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
