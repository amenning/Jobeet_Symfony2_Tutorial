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
        $__internal_4c7f3015deaae0118828f56536c61406d57f6a7ab81cca2be68fe97eb514d759 = $this->env->getExtension("native_profiler");
        $__internal_4c7f3015deaae0118828f56536c61406d57f6a7ab81cca2be68fe97eb514d759->enter($__internal_4c7f3015deaae0118828f56536c61406d57f6a7ab81cca2be68fe97eb514d759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7f3015deaae0118828f56536c61406d57f6a7ab81cca2be68fe97eb514d759->leave($__internal_4c7f3015deaae0118828f56536c61406d57f6a7ab81cca2be68fe97eb514d759_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ff690224933e8f9f627e82e3dc4e83e600408d647e0e1669d2a8fe2e7dbd40b = $this->env->getExtension("native_profiler");
        $__internal_0ff690224933e8f9f627e82e3dc4e83e600408d647e0e1669d2a8fe2e7dbd40b->enter($__internal_0ff690224933e8f9f627e82e3dc4e83e600408d647e0e1669d2a8fe2e7dbd40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ff690224933e8f9f627e82e3dc4e83e600408d647e0e1669d2a8fe2e7dbd40b->leave($__internal_0ff690224933e8f9f627e82e3dc4e83e600408d647e0e1669d2a8fe2e7dbd40b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e920ad20fd50aafc7acabd3665ddc405e189b25e5cd0a3b4b25c1209ee3ec70 = $this->env->getExtension("native_profiler");
        $__internal_3e920ad20fd50aafc7acabd3665ddc405e189b25e5cd0a3b4b25c1209ee3ec70->enter($__internal_3e920ad20fd50aafc7acabd3665ddc405e189b25e5cd0a3b4b25c1209ee3ec70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e920ad20fd50aafc7acabd3665ddc405e189b25e5cd0a3b4b25c1209ee3ec70->leave($__internal_3e920ad20fd50aafc7acabd3665ddc405e189b25e5cd0a3b4b25c1209ee3ec70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a53fe441b36c4b0de9194d4b6143ee72131221862ad9b221cf00b6db400fafc0 = $this->env->getExtension("native_profiler");
        $__internal_a53fe441b36c4b0de9194d4b6143ee72131221862ad9b221cf00b6db400fafc0->enter($__internal_a53fe441b36c4b0de9194d4b6143ee72131221862ad9b221cf00b6db400fafc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a53fe441b36c4b0de9194d4b6143ee72131221862ad9b221cf00b6db400fafc0->leave($__internal_a53fe441b36c4b0de9194d4b6143ee72131221862ad9b221cf00b6db400fafc0_prof);

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
