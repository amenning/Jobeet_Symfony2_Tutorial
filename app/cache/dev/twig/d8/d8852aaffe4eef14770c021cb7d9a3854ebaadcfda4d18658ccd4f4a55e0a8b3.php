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
        $__internal_611e2e570bfb22dcb69aae2e2357b868003e8381a50b91f57a7a7a10db0cd316 = $this->env->getExtension("native_profiler");
        $__internal_611e2e570bfb22dcb69aae2e2357b868003e8381a50b91f57a7a7a10db0cd316->enter($__internal_611e2e570bfb22dcb69aae2e2357b868003e8381a50b91f57a7a7a10db0cd316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_611e2e570bfb22dcb69aae2e2357b868003e8381a50b91f57a7a7a10db0cd316->leave($__internal_611e2e570bfb22dcb69aae2e2357b868003e8381a50b91f57a7a7a10db0cd316_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cca40ac4636639c1a82142b472e17e1a50444639458a50615f27f7eeb29241b = $this->env->getExtension("native_profiler");
        $__internal_3cca40ac4636639c1a82142b472e17e1a50444639458a50615f27f7eeb29241b->enter($__internal_3cca40ac4636639c1a82142b472e17e1a50444639458a50615f27f7eeb29241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3cca40ac4636639c1a82142b472e17e1a50444639458a50615f27f7eeb29241b->leave($__internal_3cca40ac4636639c1a82142b472e17e1a50444639458a50615f27f7eeb29241b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae1925cbdd48545120f744554792600c8b747b59a32ba918109d26ca53a3a8fb = $this->env->getExtension("native_profiler");
        $__internal_ae1925cbdd48545120f744554792600c8b747b59a32ba918109d26ca53a3a8fb->enter($__internal_ae1925cbdd48545120f744554792600c8b747b59a32ba918109d26ca53a3a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ae1925cbdd48545120f744554792600c8b747b59a32ba918109d26ca53a3a8fb->leave($__internal_ae1925cbdd48545120f744554792600c8b747b59a32ba918109d26ca53a3a8fb_prof);

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
