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
        $__internal_a2d866774ec217872b71b344e28fafe81ceb1250e67dbda9a3bbc02f0834aa91 = $this->env->getExtension("native_profiler");
        $__internal_a2d866774ec217872b71b344e28fafe81ceb1250e67dbda9a3bbc02f0834aa91->enter($__internal_a2d866774ec217872b71b344e28fafe81ceb1250e67dbda9a3bbc02f0834aa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2d866774ec217872b71b344e28fafe81ceb1250e67dbda9a3bbc02f0834aa91->leave($__internal_a2d866774ec217872b71b344e28fafe81ceb1250e67dbda9a3bbc02f0834aa91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_babcc9a2446328594023221c5e92f90d367ab999fce324dbed1734c50105983d = $this->env->getExtension("native_profiler");
        $__internal_babcc9a2446328594023221c5e92f90d367ab999fce324dbed1734c50105983d->enter($__internal_babcc9a2446328594023221c5e92f90d367ab999fce324dbed1734c50105983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_babcc9a2446328594023221c5e92f90d367ab999fce324dbed1734c50105983d->leave($__internal_babcc9a2446328594023221c5e92f90d367ab999fce324dbed1734c50105983d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_20261687176649f84da6b5e0256ac08a2d0d60ea30febdc3fb54b392ce114348 = $this->env->getExtension("native_profiler");
        $__internal_20261687176649f84da6b5e0256ac08a2d0d60ea30febdc3fb54b392ce114348->enter($__internal_20261687176649f84da6b5e0256ac08a2d0d60ea30febdc3fb54b392ce114348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20261687176649f84da6b5e0256ac08a2d0d60ea30febdc3fb54b392ce114348->leave($__internal_20261687176649f84da6b5e0256ac08a2d0d60ea30febdc3fb54b392ce114348_prof);

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
