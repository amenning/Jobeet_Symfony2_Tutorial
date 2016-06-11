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
        $__internal_f6272bc03932871a7d5c3a55a103adee5075f1440beddc9a92652a5ac5b060d1 = $this->env->getExtension("native_profiler");
        $__internal_f6272bc03932871a7d5c3a55a103adee5075f1440beddc9a92652a5ac5b060d1->enter($__internal_f6272bc03932871a7d5c3a55a103adee5075f1440beddc9a92652a5ac5b060d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6272bc03932871a7d5c3a55a103adee5075f1440beddc9a92652a5ac5b060d1->leave($__internal_f6272bc03932871a7d5c3a55a103adee5075f1440beddc9a92652a5ac5b060d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfab52b7ef2a411193038178f93db439ff11d0f5264a6b404623d5e196970863 = $this->env->getExtension("native_profiler");
        $__internal_cfab52b7ef2a411193038178f93db439ff11d0f5264a6b404623d5e196970863->enter($__internal_cfab52b7ef2a411193038178f93db439ff11d0f5264a6b404623d5e196970863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cfab52b7ef2a411193038178f93db439ff11d0f5264a6b404623d5e196970863->leave($__internal_cfab52b7ef2a411193038178f93db439ff11d0f5264a6b404623d5e196970863_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99ec08f97c37fd3c3c8c50c48984c569f49e8db8b887c232f5cd4bce9bdf229b = $this->env->getExtension("native_profiler");
        $__internal_99ec08f97c37fd3c3c8c50c48984c569f49e8db8b887c232f5cd4bce9bdf229b->enter($__internal_99ec08f97c37fd3c3c8c50c48984c569f49e8db8b887c232f5cd4bce9bdf229b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99ec08f97c37fd3c3c8c50c48984c569f49e8db8b887c232f5cd4bce9bdf229b->leave($__internal_99ec08f97c37fd3c3c8c50c48984c569f49e8db8b887c232f5cd4bce9bdf229b_prof);

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
