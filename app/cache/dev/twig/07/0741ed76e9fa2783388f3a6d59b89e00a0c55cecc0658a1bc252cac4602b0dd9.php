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
        $__internal_e0ac2a1afe86de6cf7c04c70d4dea36cef494999e6dec591323f1ac2706f3c81 = $this->env->getExtension("native_profiler");
        $__internal_e0ac2a1afe86de6cf7c04c70d4dea36cef494999e6dec591323f1ac2706f3c81->enter($__internal_e0ac2a1afe86de6cf7c04c70d4dea36cef494999e6dec591323f1ac2706f3c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ac2a1afe86de6cf7c04c70d4dea36cef494999e6dec591323f1ac2706f3c81->leave($__internal_e0ac2a1afe86de6cf7c04c70d4dea36cef494999e6dec591323f1ac2706f3c81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8401ef1a4fa59fab2a3197cec578aa7771dd847b5bad48a7a7be11f03984519c = $this->env->getExtension("native_profiler");
        $__internal_8401ef1a4fa59fab2a3197cec578aa7771dd847b5bad48a7a7be11f03984519c->enter($__internal_8401ef1a4fa59fab2a3197cec578aa7771dd847b5bad48a7a7be11f03984519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8401ef1a4fa59fab2a3197cec578aa7771dd847b5bad48a7a7be11f03984519c->leave($__internal_8401ef1a4fa59fab2a3197cec578aa7771dd847b5bad48a7a7be11f03984519c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c501e19d63892bb8e378d7e67d2d5cd3afd3a1f2d7d3a8f48bd9f7b6e9157e6 = $this->env->getExtension("native_profiler");
        $__internal_5c501e19d63892bb8e378d7e67d2d5cd3afd3a1f2d7d3a8f48bd9f7b6e9157e6->enter($__internal_5c501e19d63892bb8e378d7e67d2d5cd3afd3a1f2d7d3a8f48bd9f7b6e9157e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c501e19d63892bb8e378d7e67d2d5cd3afd3a1f2d7d3a8f48bd9f7b6e9157e6->leave($__internal_5c501e19d63892bb8e378d7e67d2d5cd3afd3a1f2d7d3a8f48bd9f7b6e9157e6_prof);

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
