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
        $__internal_c1c44a764188753ff4673deb21de64e7be095412d6e7d382545ebbf51b46869f = $this->env->getExtension("native_profiler");
        $__internal_c1c44a764188753ff4673deb21de64e7be095412d6e7d382545ebbf51b46869f->enter($__internal_c1c44a764188753ff4673deb21de64e7be095412d6e7d382545ebbf51b46869f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c44a764188753ff4673deb21de64e7be095412d6e7d382545ebbf51b46869f->leave($__internal_c1c44a764188753ff4673deb21de64e7be095412d6e7d382545ebbf51b46869f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd0bea73623f8cb6a80ac67ce81be52367af36f099ac01b607e344d0fce60011 = $this->env->getExtension("native_profiler");
        $__internal_cd0bea73623f8cb6a80ac67ce81be52367af36f099ac01b607e344d0fce60011->enter($__internal_cd0bea73623f8cb6a80ac67ce81be52367af36f099ac01b607e344d0fce60011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cd0bea73623f8cb6a80ac67ce81be52367af36f099ac01b607e344d0fce60011->leave($__internal_cd0bea73623f8cb6a80ac67ce81be52367af36f099ac01b607e344d0fce60011_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5006ff8677a88a5bbf57a52536d2c2338eebe0d4c517d666669b9e34a872ddb3 = $this->env->getExtension("native_profiler");
        $__internal_5006ff8677a88a5bbf57a52536d2c2338eebe0d4c517d666669b9e34a872ddb3->enter($__internal_5006ff8677a88a5bbf57a52536d2c2338eebe0d4c517d666669b9e34a872ddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5006ff8677a88a5bbf57a52536d2c2338eebe0d4c517d666669b9e34a872ddb3->leave($__internal_5006ff8677a88a5bbf57a52536d2c2338eebe0d4c517d666669b9e34a872ddb3_prof);

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
