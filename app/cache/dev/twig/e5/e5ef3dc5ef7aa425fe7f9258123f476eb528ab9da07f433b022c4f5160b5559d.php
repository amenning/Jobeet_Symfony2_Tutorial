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
        $__internal_d218bd3064ceed508cf92545b31195921c245f1623962de587cb52c0245d20c9 = $this->env->getExtension("native_profiler");
        $__internal_d218bd3064ceed508cf92545b31195921c245f1623962de587cb52c0245d20c9->enter($__internal_d218bd3064ceed508cf92545b31195921c245f1623962de587cb52c0245d20c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d218bd3064ceed508cf92545b31195921c245f1623962de587cb52c0245d20c9->leave($__internal_d218bd3064ceed508cf92545b31195921c245f1623962de587cb52c0245d20c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6758708676b175f8cd1a5cfe7c3fefcb67ca00f394a3e39fc808c28864ff042 = $this->env->getExtension("native_profiler");
        $__internal_b6758708676b175f8cd1a5cfe7c3fefcb67ca00f394a3e39fc808c28864ff042->enter($__internal_b6758708676b175f8cd1a5cfe7c3fefcb67ca00f394a3e39fc808c28864ff042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b6758708676b175f8cd1a5cfe7c3fefcb67ca00f394a3e39fc808c28864ff042->leave($__internal_b6758708676b175f8cd1a5cfe7c3fefcb67ca00f394a3e39fc808c28864ff042_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a34e891c4f591fd1a26e3b026287fadc955167505b5709d3f660b1d8c5e1d7 = $this->env->getExtension("native_profiler");
        $__internal_e9a34e891c4f591fd1a26e3b026287fadc955167505b5709d3f660b1d8c5e1d7->enter($__internal_e9a34e891c4f591fd1a26e3b026287fadc955167505b5709d3f660b1d8c5e1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e9a34e891c4f591fd1a26e3b026287fadc955167505b5709d3f660b1d8c5e1d7->leave($__internal_e9a34e891c4f591fd1a26e3b026287fadc955167505b5709d3f660b1d8c5e1d7_prof);

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
