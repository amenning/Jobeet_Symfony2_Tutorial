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
        $__internal_21569b7d886448937214c1e40801d0e3a5de3900dec6918c876c21d4ead7745f = $this->env->getExtension("native_profiler");
        $__internal_21569b7d886448937214c1e40801d0e3a5de3900dec6918c876c21d4ead7745f->enter($__internal_21569b7d886448937214c1e40801d0e3a5de3900dec6918c876c21d4ead7745f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21569b7d886448937214c1e40801d0e3a5de3900dec6918c876c21d4ead7745f->leave($__internal_21569b7d886448937214c1e40801d0e3a5de3900dec6918c876c21d4ead7745f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4871827e798c6addd8582bb91dc50b9e555c84ca4f0583f2d3c3da6eff09382e = $this->env->getExtension("native_profiler");
        $__internal_4871827e798c6addd8582bb91dc50b9e555c84ca4f0583f2d3c3da6eff09382e->enter($__internal_4871827e798c6addd8582bb91dc50b9e555c84ca4f0583f2d3c3da6eff09382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4871827e798c6addd8582bb91dc50b9e555c84ca4f0583f2d3c3da6eff09382e->leave($__internal_4871827e798c6addd8582bb91dc50b9e555c84ca4f0583f2d3c3da6eff09382e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b2a6ab6f1a20aa514665954f56da4e1e2c3d2acb938b5a62cfde8dd7acbbf5f = $this->env->getExtension("native_profiler");
        $__internal_3b2a6ab6f1a20aa514665954f56da4e1e2c3d2acb938b5a62cfde8dd7acbbf5f->enter($__internal_3b2a6ab6f1a20aa514665954f56da4e1e2c3d2acb938b5a62cfde8dd7acbbf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b2a6ab6f1a20aa514665954f56da4e1e2c3d2acb938b5a62cfde8dd7acbbf5f->leave($__internal_3b2a6ab6f1a20aa514665954f56da4e1e2c3d2acb938b5a62cfde8dd7acbbf5f_prof);

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
