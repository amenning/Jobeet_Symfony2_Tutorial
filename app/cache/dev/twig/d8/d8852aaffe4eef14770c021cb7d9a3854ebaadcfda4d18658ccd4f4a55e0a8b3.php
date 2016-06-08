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
        $__internal_d010701ee9efd5707a90cd2418f28944d257279f97900e0cb00fddb3c6840b35 = $this->env->getExtension("native_profiler");
        $__internal_d010701ee9efd5707a90cd2418f28944d257279f97900e0cb00fddb3c6840b35->enter($__internal_d010701ee9efd5707a90cd2418f28944d257279f97900e0cb00fddb3c6840b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d010701ee9efd5707a90cd2418f28944d257279f97900e0cb00fddb3c6840b35->leave($__internal_d010701ee9efd5707a90cd2418f28944d257279f97900e0cb00fddb3c6840b35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b534d8f03c9799e0208d1a02a74db9c5a1b855e6bde6c4392327245a9aef62b = $this->env->getExtension("native_profiler");
        $__internal_8b534d8f03c9799e0208d1a02a74db9c5a1b855e6bde6c4392327245a9aef62b->enter($__internal_8b534d8f03c9799e0208d1a02a74db9c5a1b855e6bde6c4392327245a9aef62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b534d8f03c9799e0208d1a02a74db9c5a1b855e6bde6c4392327245a9aef62b->leave($__internal_8b534d8f03c9799e0208d1a02a74db9c5a1b855e6bde6c4392327245a9aef62b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_132c8484442350cec5c0e04ab0a7fb0329b2f1b1477c13e5922f6672a93b28fb = $this->env->getExtension("native_profiler");
        $__internal_132c8484442350cec5c0e04ab0a7fb0329b2f1b1477c13e5922f6672a93b28fb->enter($__internal_132c8484442350cec5c0e04ab0a7fb0329b2f1b1477c13e5922f6672a93b28fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_132c8484442350cec5c0e04ab0a7fb0329b2f1b1477c13e5922f6672a93b28fb->leave($__internal_132c8484442350cec5c0e04ab0a7fb0329b2f1b1477c13e5922f6672a93b28fb_prof);

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
