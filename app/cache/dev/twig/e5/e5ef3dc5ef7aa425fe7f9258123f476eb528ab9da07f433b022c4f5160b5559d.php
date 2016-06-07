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
        $__internal_d366a2e584fa788f856d02c31cf3933d44c7bf1cd7dad67ee39617ae2d52fef9 = $this->env->getExtension("native_profiler");
        $__internal_d366a2e584fa788f856d02c31cf3933d44c7bf1cd7dad67ee39617ae2d52fef9->enter($__internal_d366a2e584fa788f856d02c31cf3933d44c7bf1cd7dad67ee39617ae2d52fef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d366a2e584fa788f856d02c31cf3933d44c7bf1cd7dad67ee39617ae2d52fef9->leave($__internal_d366a2e584fa788f856d02c31cf3933d44c7bf1cd7dad67ee39617ae2d52fef9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79d87d08e6cb5def7b6fd7b1c0dc67f2acd482ced6c62d3f0363073b66d23daf = $this->env->getExtension("native_profiler");
        $__internal_79d87d08e6cb5def7b6fd7b1c0dc67f2acd482ced6c62d3f0363073b66d23daf->enter($__internal_79d87d08e6cb5def7b6fd7b1c0dc67f2acd482ced6c62d3f0363073b66d23daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79d87d08e6cb5def7b6fd7b1c0dc67f2acd482ced6c62d3f0363073b66d23daf->leave($__internal_79d87d08e6cb5def7b6fd7b1c0dc67f2acd482ced6c62d3f0363073b66d23daf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_280be70232d51431009f15e4de1f9a63ae364d9d6bcf725db2705927e6bab58a = $this->env->getExtension("native_profiler");
        $__internal_280be70232d51431009f15e4de1f9a63ae364d9d6bcf725db2705927e6bab58a->enter($__internal_280be70232d51431009f15e4de1f9a63ae364d9d6bcf725db2705927e6bab58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_280be70232d51431009f15e4de1f9a63ae364d9d6bcf725db2705927e6bab58a->leave($__internal_280be70232d51431009f15e4de1f9a63ae364d9d6bcf725db2705927e6bab58a_prof);

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
