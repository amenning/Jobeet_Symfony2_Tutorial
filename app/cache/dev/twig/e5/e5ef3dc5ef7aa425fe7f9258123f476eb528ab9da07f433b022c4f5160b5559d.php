<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c87de4d8e6686f86cac93fe8d9df598dd57998ab64a5ca48666e5cef81b22526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016f596c0dc2750657c3e5c9437a5c2cb9ea221c2931599ecbbe5393865fa708 = $this->env->getExtension("native_profiler");
        $__internal_016f596c0dc2750657c3e5c9437a5c2cb9ea221c2931599ecbbe5393865fa708->enter($__internal_016f596c0dc2750657c3e5c9437a5c2cb9ea221c2931599ecbbe5393865fa708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016f596c0dc2750657c3e5c9437a5c2cb9ea221c2931599ecbbe5393865fa708->leave($__internal_016f596c0dc2750657c3e5c9437a5c2cb9ea221c2931599ecbbe5393865fa708_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18d038aeeffadae616cc497e95d0617280c14a9023548808bd9d2c888d6f3601 = $this->env->getExtension("native_profiler");
        $__internal_18d038aeeffadae616cc497e95d0617280c14a9023548808bd9d2c888d6f3601->enter($__internal_18d038aeeffadae616cc497e95d0617280c14a9023548808bd9d2c888d6f3601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_18d038aeeffadae616cc497e95d0617280c14a9023548808bd9d2c888d6f3601->leave($__internal_18d038aeeffadae616cc497e95d0617280c14a9023548808bd9d2c888d6f3601_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2598c5ccf0dd6d54fa0702859405870349927dba5da52a7e9bceb558c1610761 = $this->env->getExtension("native_profiler");
        $__internal_2598c5ccf0dd6d54fa0702859405870349927dba5da52a7e9bceb558c1610761->enter($__internal_2598c5ccf0dd6d54fa0702859405870349927dba5da52a7e9bceb558c1610761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2598c5ccf0dd6d54fa0702859405870349927dba5da52a7e9bceb558c1610761->leave($__internal_2598c5ccf0dd6d54fa0702859405870349927dba5da52a7e9bceb558c1610761_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
