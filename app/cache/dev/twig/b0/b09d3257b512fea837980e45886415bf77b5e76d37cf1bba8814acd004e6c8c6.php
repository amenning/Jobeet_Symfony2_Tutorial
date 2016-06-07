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
        $__internal_b1e670f99dd95d5aa61b084061b41d7346bafe4d2cfdaaf8cf61d1dd71f2c82b = $this->env->getExtension("native_profiler");
        $__internal_b1e670f99dd95d5aa61b084061b41d7346bafe4d2cfdaaf8cf61d1dd71f2c82b->enter($__internal_b1e670f99dd95d5aa61b084061b41d7346bafe4d2cfdaaf8cf61d1dd71f2c82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1e670f99dd95d5aa61b084061b41d7346bafe4d2cfdaaf8cf61d1dd71f2c82b->leave($__internal_b1e670f99dd95d5aa61b084061b41d7346bafe4d2cfdaaf8cf61d1dd71f2c82b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b359fdd4b631d253768af09be066015ed75fb6e06f2894ec4bd382cbe80b7b7b = $this->env->getExtension("native_profiler");
        $__internal_b359fdd4b631d253768af09be066015ed75fb6e06f2894ec4bd382cbe80b7b7b->enter($__internal_b359fdd4b631d253768af09be066015ed75fb6e06f2894ec4bd382cbe80b7b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b359fdd4b631d253768af09be066015ed75fb6e06f2894ec4bd382cbe80b7b7b->leave($__internal_b359fdd4b631d253768af09be066015ed75fb6e06f2894ec4bd382cbe80b7b7b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7087461fcc9e78883f5717feed005befe5d7f05d033958ca7aba68903bb0f75a = $this->env->getExtension("native_profiler");
        $__internal_7087461fcc9e78883f5717feed005befe5d7f05d033958ca7aba68903bb0f75a->enter($__internal_7087461fcc9e78883f5717feed005befe5d7f05d033958ca7aba68903bb0f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7087461fcc9e78883f5717feed005befe5d7f05d033958ca7aba68903bb0f75a->leave($__internal_7087461fcc9e78883f5717feed005befe5d7f05d033958ca7aba68903bb0f75a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea7563ac86d2e8da01b8ebde01034ac8d8bf35a1a18cc67332f5f806f1ced1c9 = $this->env->getExtension("native_profiler");
        $__internal_ea7563ac86d2e8da01b8ebde01034ac8d8bf35a1a18cc67332f5f806f1ced1c9->enter($__internal_ea7563ac86d2e8da01b8ebde01034ac8d8bf35a1a18cc67332f5f806f1ced1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea7563ac86d2e8da01b8ebde01034ac8d8bf35a1a18cc67332f5f806f1ced1c9->leave($__internal_ea7563ac86d2e8da01b8ebde01034ac8d8bf35a1a18cc67332f5f806f1ced1c9_prof);

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
