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
        $__internal_536b374de020cf1244f3c834352a821e69f0bd4d7a5cb5e86cb6c4c4827fbe48 = $this->env->getExtension("native_profiler");
        $__internal_536b374de020cf1244f3c834352a821e69f0bd4d7a5cb5e86cb6c4c4827fbe48->enter($__internal_536b374de020cf1244f3c834352a821e69f0bd4d7a5cb5e86cb6c4c4827fbe48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_536b374de020cf1244f3c834352a821e69f0bd4d7a5cb5e86cb6c4c4827fbe48->leave($__internal_536b374de020cf1244f3c834352a821e69f0bd4d7a5cb5e86cb6c4c4827fbe48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24bc4ae9505be1aa2f3c934cbf1945786e12caef854305c73fbc9e35be7cde22 = $this->env->getExtension("native_profiler");
        $__internal_24bc4ae9505be1aa2f3c934cbf1945786e12caef854305c73fbc9e35be7cde22->enter($__internal_24bc4ae9505be1aa2f3c934cbf1945786e12caef854305c73fbc9e35be7cde22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_24bc4ae9505be1aa2f3c934cbf1945786e12caef854305c73fbc9e35be7cde22->leave($__internal_24bc4ae9505be1aa2f3c934cbf1945786e12caef854305c73fbc9e35be7cde22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_325227a224c946958af243f4a96b31606c14692e94d68e2ad2ecd885099ca9b5 = $this->env->getExtension("native_profiler");
        $__internal_325227a224c946958af243f4a96b31606c14692e94d68e2ad2ecd885099ca9b5->enter($__internal_325227a224c946958af243f4a96b31606c14692e94d68e2ad2ecd885099ca9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_325227a224c946958af243f4a96b31606c14692e94d68e2ad2ecd885099ca9b5->leave($__internal_325227a224c946958af243f4a96b31606c14692e94d68e2ad2ecd885099ca9b5_prof);

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
