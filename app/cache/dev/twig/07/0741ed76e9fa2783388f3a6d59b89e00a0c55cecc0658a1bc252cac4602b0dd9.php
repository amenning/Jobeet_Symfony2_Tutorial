<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9070871fd559bba25e49457e0cba38462f72698cd9a825d67a43b21ecf92665f extends Twig_Template
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
        $__internal_55ff8705ca313173fbc3a63c662464961b7a8e5343a625afd8e5c9460a93c613 = $this->env->getExtension("native_profiler");
        $__internal_55ff8705ca313173fbc3a63c662464961b7a8e5343a625afd8e5c9460a93c613->enter($__internal_55ff8705ca313173fbc3a63c662464961b7a8e5343a625afd8e5c9460a93c613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ff8705ca313173fbc3a63c662464961b7a8e5343a625afd8e5c9460a93c613->leave($__internal_55ff8705ca313173fbc3a63c662464961b7a8e5343a625afd8e5c9460a93c613_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da6e763a511b35a61367e6d1dd3b68268158ac057d6ab3248e63c644f8bb92a6 = $this->env->getExtension("native_profiler");
        $__internal_da6e763a511b35a61367e6d1dd3b68268158ac057d6ab3248e63c644f8bb92a6->enter($__internal_da6e763a511b35a61367e6d1dd3b68268158ac057d6ab3248e63c644f8bb92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da6e763a511b35a61367e6d1dd3b68268158ac057d6ab3248e63c644f8bb92a6->leave($__internal_da6e763a511b35a61367e6d1dd3b68268158ac057d6ab3248e63c644f8bb92a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc70494a84a455fb7bb44c069caff7b04c53547921b3e34a227c8db60affd330 = $this->env->getExtension("native_profiler");
        $__internal_fc70494a84a455fb7bb44c069caff7b04c53547921b3e34a227c8db60affd330->enter($__internal_fc70494a84a455fb7bb44c069caff7b04c53547921b3e34a227c8db60affd330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fc70494a84a455fb7bb44c069caff7b04c53547921b3e34a227c8db60affd330->leave($__internal_fc70494a84a455fb7bb44c069caff7b04c53547921b3e34a227c8db60affd330_prof);

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
