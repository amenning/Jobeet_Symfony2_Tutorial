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
        $__internal_d106177656babae5742f7dd5232c12731e34ac255a026b1b2eadf376474328f8 = $this->env->getExtension("native_profiler");
        $__internal_d106177656babae5742f7dd5232c12731e34ac255a026b1b2eadf376474328f8->enter($__internal_d106177656babae5742f7dd5232c12731e34ac255a026b1b2eadf376474328f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d106177656babae5742f7dd5232c12731e34ac255a026b1b2eadf376474328f8->leave($__internal_d106177656babae5742f7dd5232c12731e34ac255a026b1b2eadf376474328f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f3793fe124310e4ed9f1cdfe1efb01dc1aede689e579907624ff5a0672225b8 = $this->env->getExtension("native_profiler");
        $__internal_3f3793fe124310e4ed9f1cdfe1efb01dc1aede689e579907624ff5a0672225b8->enter($__internal_3f3793fe124310e4ed9f1cdfe1efb01dc1aede689e579907624ff5a0672225b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f3793fe124310e4ed9f1cdfe1efb01dc1aede689e579907624ff5a0672225b8->leave($__internal_3f3793fe124310e4ed9f1cdfe1efb01dc1aede689e579907624ff5a0672225b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a86113516b8e8cd8b38f5bcafa648d543de496f6442aebe6fd1486eeea791ce = $this->env->getExtension("native_profiler");
        $__internal_6a86113516b8e8cd8b38f5bcafa648d543de496f6442aebe6fd1486eeea791ce->enter($__internal_6a86113516b8e8cd8b38f5bcafa648d543de496f6442aebe6fd1486eeea791ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a86113516b8e8cd8b38f5bcafa648d543de496f6442aebe6fd1486eeea791ce->leave($__internal_6a86113516b8e8cd8b38f5bcafa648d543de496f6442aebe6fd1486eeea791ce_prof);

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
