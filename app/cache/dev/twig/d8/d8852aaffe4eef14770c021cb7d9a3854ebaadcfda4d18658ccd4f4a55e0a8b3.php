<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
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
        $__internal_fb8b253176089cb209741f04c2dce61c908a0c27f311d00bab0833346c979356 = $this->env->getExtension("native_profiler");
        $__internal_fb8b253176089cb209741f04c2dce61c908a0c27f311d00bab0833346c979356->enter($__internal_fb8b253176089cb209741f04c2dce61c908a0c27f311d00bab0833346c979356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8b253176089cb209741f04c2dce61c908a0c27f311d00bab0833346c979356->leave($__internal_fb8b253176089cb209741f04c2dce61c908a0c27f311d00bab0833346c979356_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5e6f295743a2a1bb63a90cfc982ed7754347d79fa23169b2a457a2fa2b18cd = $this->env->getExtension("native_profiler");
        $__internal_bb5e6f295743a2a1bb63a90cfc982ed7754347d79fa23169b2a457a2fa2b18cd->enter($__internal_bb5e6f295743a2a1bb63a90cfc982ed7754347d79fa23169b2a457a2fa2b18cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bb5e6f295743a2a1bb63a90cfc982ed7754347d79fa23169b2a457a2fa2b18cd->leave($__internal_bb5e6f295743a2a1bb63a90cfc982ed7754347d79fa23169b2a457a2fa2b18cd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d69f74fad34e0a6d8e73e36d108c7ca4911ffe5dcee574d2f30a7b7fbed3dded = $this->env->getExtension("native_profiler");
        $__internal_d69f74fad34e0a6d8e73e36d108c7ca4911ffe5dcee574d2f30a7b7fbed3dded->enter($__internal_d69f74fad34e0a6d8e73e36d108c7ca4911ffe5dcee574d2f30a7b7fbed3dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d69f74fad34e0a6d8e73e36d108c7ca4911ffe5dcee574d2f30a7b7fbed3dded->leave($__internal_d69f74fad34e0a6d8e73e36d108c7ca4911ffe5dcee574d2f30a7b7fbed3dded_prof);

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
