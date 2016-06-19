<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7b2fac19d7fe51da01dd02ce1174ecbc84d4d2292dc1ec8e5644eca9ffa489e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_6c8adedbfa0873b2a45a65999fbace184b602b328a092c34ae5ffb61d1acba56 = $this->env->getExtension("native_profiler");
        $__internal_6c8adedbfa0873b2a45a65999fbace184b602b328a092c34ae5ffb61d1acba56->enter($__internal_6c8adedbfa0873b2a45a65999fbace184b602b328a092c34ae5ffb61d1acba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8adedbfa0873b2a45a65999fbace184b602b328a092c34ae5ffb61d1acba56->leave($__internal_6c8adedbfa0873b2a45a65999fbace184b602b328a092c34ae5ffb61d1acba56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e7734edc4be0e3f83a0ef3696c610372755d77115b2899b977cd5ab3613924f = $this->env->getExtension("native_profiler");
        $__internal_2e7734edc4be0e3f83a0ef3696c610372755d77115b2899b977cd5ab3613924f->enter($__internal_2e7734edc4be0e3f83a0ef3696c610372755d77115b2899b977cd5ab3613924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e7734edc4be0e3f83a0ef3696c610372755d77115b2899b977cd5ab3613924f->leave($__internal_2e7734edc4be0e3f83a0ef3696c610372755d77115b2899b977cd5ab3613924f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff25e7f5356771506b0213c57c68f120e18c568302965a489689176de0529e43 = $this->env->getExtension("native_profiler");
        $__internal_ff25e7f5356771506b0213c57c68f120e18c568302965a489689176de0529e43->enter($__internal_ff25e7f5356771506b0213c57c68f120e18c568302965a489689176de0529e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ff25e7f5356771506b0213c57c68f120e18c568302965a489689176de0529e43->leave($__internal_ff25e7f5356771506b0213c57c68f120e18c568302965a489689176de0529e43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
