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
        $__internal_08c8cdbc9ebc82883a89249b8bea845d7d03e7e7ab983db860a210a7a703510f = $this->env->getExtension("native_profiler");
        $__internal_08c8cdbc9ebc82883a89249b8bea845d7d03e7e7ab983db860a210a7a703510f->enter($__internal_08c8cdbc9ebc82883a89249b8bea845d7d03e7e7ab983db860a210a7a703510f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c8cdbc9ebc82883a89249b8bea845d7d03e7e7ab983db860a210a7a703510f->leave($__internal_08c8cdbc9ebc82883a89249b8bea845d7d03e7e7ab983db860a210a7a703510f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b16250ca14dd77a43934f9b67479a8f87bf730ccfb449112ad32220725754987 = $this->env->getExtension("native_profiler");
        $__internal_b16250ca14dd77a43934f9b67479a8f87bf730ccfb449112ad32220725754987->enter($__internal_b16250ca14dd77a43934f9b67479a8f87bf730ccfb449112ad32220725754987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b16250ca14dd77a43934f9b67479a8f87bf730ccfb449112ad32220725754987->leave($__internal_b16250ca14dd77a43934f9b67479a8f87bf730ccfb449112ad32220725754987_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ad37461c5e123e98da8a1b77864cd3d4fb117c4eaf25b79518d66ddba49711 = $this->env->getExtension("native_profiler");
        $__internal_74ad37461c5e123e98da8a1b77864cd3d4fb117c4eaf25b79518d66ddba49711->enter($__internal_74ad37461c5e123e98da8a1b77864cd3d4fb117c4eaf25b79518d66ddba49711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74ad37461c5e123e98da8a1b77864cd3d4fb117c4eaf25b79518d66ddba49711->leave($__internal_74ad37461c5e123e98da8a1b77864cd3d4fb117c4eaf25b79518d66ddba49711_prof);

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
