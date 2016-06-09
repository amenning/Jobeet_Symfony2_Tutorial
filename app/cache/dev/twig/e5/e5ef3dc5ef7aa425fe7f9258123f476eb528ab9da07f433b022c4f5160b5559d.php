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
        $__internal_2d9538daaec5fb64bfc54b951ff82447e73dd95ff0a3f5c641a67dc5bb74cc48 = $this->env->getExtension("native_profiler");
        $__internal_2d9538daaec5fb64bfc54b951ff82447e73dd95ff0a3f5c641a67dc5bb74cc48->enter($__internal_2d9538daaec5fb64bfc54b951ff82447e73dd95ff0a3f5c641a67dc5bb74cc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9538daaec5fb64bfc54b951ff82447e73dd95ff0a3f5c641a67dc5bb74cc48->leave($__internal_2d9538daaec5fb64bfc54b951ff82447e73dd95ff0a3f5c641a67dc5bb74cc48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c63615856a0251e7ed5a0841a401d11d09b3bff7203c5fb02c24036540278a31 = $this->env->getExtension("native_profiler");
        $__internal_c63615856a0251e7ed5a0841a401d11d09b3bff7203c5fb02c24036540278a31->enter($__internal_c63615856a0251e7ed5a0841a401d11d09b3bff7203c5fb02c24036540278a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c63615856a0251e7ed5a0841a401d11d09b3bff7203c5fb02c24036540278a31->leave($__internal_c63615856a0251e7ed5a0841a401d11d09b3bff7203c5fb02c24036540278a31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6dfbe38cf4f5f755af6f5396786f0d2ce810a31b0b0e3b72e85badc8161bec = $this->env->getExtension("native_profiler");
        $__internal_2d6dfbe38cf4f5f755af6f5396786f0d2ce810a31b0b0e3b72e85badc8161bec->enter($__internal_2d6dfbe38cf4f5f755af6f5396786f0d2ce810a31b0b0e3b72e85badc8161bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d6dfbe38cf4f5f755af6f5396786f0d2ce810a31b0b0e3b72e85badc8161bec->leave($__internal_2d6dfbe38cf4f5f755af6f5396786f0d2ce810a31b0b0e3b72e85badc8161bec_prof);

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
